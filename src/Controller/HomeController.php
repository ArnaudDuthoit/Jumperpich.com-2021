<?php

namespace App\Controller;


use App\Repository\ProjetRepository;
use DateTime;
use Exception;
use ReCaptcha\ReCaptcha;
use Swift_Mailer;
use Swift_Message;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contact;
use Swift_SmtpTransport;


class HomeController extends AbstractController
{

    /**
     * @var ProjetRepository
     */
    private $repository;


    public function __construct(ProjetRepository $repository)
    {
        $this->repository = $repository;
    }


    /**
     * Home Page
     * @Route("/", name="home")
     * @param ProjetRepository $repository
     * @return Response
     */
    public function index(ProjetRepository $repository)
    {



        $last = $repository->findLatest();
        $views = $repository->findViewest();

        $ua = htmlentities($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8');
        if (preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0') !== false && strpos($ua, 'rv:11.0') !== false)) {
            return $this->render('InternetExplorer.html.twig');
        } else {
            return $this->render('home/home.html.twig', [
                'last' => $last,
                'views' => $views,
                'current_menu' => 'home'
            ]);
        }

    }




        /**
     * General Data Protection Regulation page
     * @Route("/rgpd", name="RGPD")
     * @return Response
     */
    public function RGPD()
    {
        return $this->render('home/RGPD.html.twig');
    }

    /**
     * The terms and conditions page
     * @Route ("/mentions", name="mentions")
     */
    public function mentions()
    {
        return $this->render('home/mentions.html.twig');
    }

    /**
     * Q&A page
     * @Route ("/faq", name="faq")
     */
    public function faq()
    {
        return $this->render('home/faq.html.twig');
    }

    /**
     * Update page
     * @Route ("/update", name="update")
     */
    public function update()
    {
        return $this->render('home/update.html.twig');
    }

    /**
     * Newsletter page
     * @Route ("/S-abonner-a-la-newsletter", name="newsletter")
     */
    public function newsletter()
    {
        return $this->render('home/newsletter.html.twig');
    }

}
