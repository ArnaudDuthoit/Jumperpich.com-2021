<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use DateTime;
use Exception;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     * @param Request $request
     * @return RedirectResponse|Response
     * @throws Exception
     */
    public function index(Request $request)
    {

        $contact = new Contact;

        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid()) {

            $name = $form['name']->getData();
            $email = $form['email']->getData();
            $subject = $form['subject']->getData();
            $message = $form['message']->getData();

            # set form data
            $contact->setName($name);
            $contact->setEmail($email);
            $contact->setSubject($subject);
            $contact->setMessage($message);
            $contact->setCreatedAt(new DateTime());
            $contact->setUpdatedAt(null);
            # finally add data in database
            $sn = $this->getDoctrine()->getManager();
            $sn->persist($contact);
            $sn->flush();

            $MAILER_USERNAME = $_ENV['MAILER_USERNAME'];
            $MAILER_PASSWORD = $_ENV['MAILER_PASSWORD'];


            $transport = (new Swift_SmtpTransport('mail.infomaniak.com', 587, "TLS"))#Config SwiftMailer
            ->setUsername($MAILER_USERNAME)
                ->setPassword($MAILER_PASSWORD);

            $mailer = new Swift_Mailer($transport);

            $message = (new Swift_Message ('Nouveau Message'))#Config of the email
            ->setFrom(['contact@jumperpich.com' => 'Jumperpich'])
                ->setTo('contact@jumperpich.com')
                ->setBody($this->renderView('home/sendemail.html.twig', [
                    'name' => $name,
                    'email' => $email,
                    'objet' => $subject,
                    'message' => $message,
                    'date' => new DateTime(),
                ]), 'text/html');
            $mailer->send($message);

            $this->addFlash("success", "Formulaire envoyé avec succès !");

            return $this->redirectToRoute('contact');

        }

        return $this->render('home/form.html.twig', [
            'current_menu' => 'contact',
            'form' => $form->createView()]);

    }
}
