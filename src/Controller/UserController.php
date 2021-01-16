<?php

namespace App\Controller;



use App\Form\UserInfosType;
use App\Form\UserResetPasswordType;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Session\Session;


class UserController extends AbstractController
{

    /**
     * @var UserRepository
     */
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }


    /**
     * User editing his informations (username and mail adress)
     * @Route("/admin/editprofile", name="user.editprofile", methods="GET|POST")
     * @param Request $request
     * @param ManagerRegistry $manager
     * @return RedirectResponse|Response
     */
    public function editInfo(Request $request, ManagerRegistry $manager)
    {
        $user = $this->getUser();
        $form = $this->createForm(UserInfosType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->flush();
            $this->addFlash("success", " Informations modifiées avec succès");
            return $this->redirectToRoute('user.editprofile');
        }
        return $this->render('user/editprofile.html.twig', [
            'user' => $user,
            'current_menu' => 'editprofile',
            'form' => $form->createView()
        ]);
    }


    /**
     * User delete his account page
     * @Route("/admin/deleteprofile", name="user.deleteprofile", methods="GET|POST")
     * @param Request $request
     * @param ManagerRegistry $manager
     * @return RedirectResponse|Response
     */
    public function deleteUser(Request $request, ManagerRegistry $manager)
    {
        $user = $this->getUser();
        $form = $this->createForm(UserInfosType::class, $user);
        $form->handleRequest($request);

        #remove the user and new session
        if ($form->isSubmitted() && $form->isValid()) {

            $manager->remove($user);
            $manager->flush();

            $session = $this->get('session');
            $session = new Session();
            $session->invalidate();
            return $this->redirectToRoute('home');
        }

        return $this->render('user/delete.html.twig', [
            'user' => $user,
            'current_menu' => 'deleteprofile',
            'form' => $form->createView()
        ]);
    }


}
