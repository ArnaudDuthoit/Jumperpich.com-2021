<?php

namespace App\Controller\Admin;

use App\Entity\Contact;
use App\Entity\Projet;
use App\Entity\Tag;
use App\Entity\User;
use App\Repository\ProjetRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class DashboardController extends AbstractDashboardController
{
    protected $projetRepository;

    public function __construct(
        ProjetRepository $projetRepository
    ) {
        $this->projetRepository = $projetRepository;
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('<em>ADMINISTRATION</em>');
    }

    public function configureCrud(): Crud
    {
        return Crud::new();
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoRoute('Visiter le site', 'fas fa-home', 'home')->setLinkTarget('_blank');

        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');


        yield MenuItem::section('Gérer Mixes', 'fas fa-folder-open');
        yield MenuItem::linkToCrud('Mixes', 'fas fa-music', Projet::class);
        yield MenuItem::linkToCrud('Tags', 'fas fa-tag', Tag::class);

        yield MenuItem::section('Messages', 'fas fa-folder-open');
        yield MenuItem::linkToCrud('Messages reçus', 'fas fa-envelope', Contact::class);

        yield MenuItem::section('Mon compte', 'fas fa-folder-open');
        yield MenuItem::linkToCrud('Modifier les identifiants', 'fas fa-user', User::class);
    }


    public function configureUserMenu(UserInterface $user): UserMenu
    {
        return parent::configureUserMenu($user)
            ->setAvatarUrl('https://arnaudduthoit.fr/wp-content/uploads/2021/01/Arnaud-Duthoit-Photo-Profil-150x150.jpg');
    }

    /**
     * @Route("/admin")
     */
    public function index(): Response
    {
        return $this->render('admin_projet/charts.html.twig');
    }
}
