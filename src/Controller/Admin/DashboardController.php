<?php

namespace App\Controller\Admin;

use App\Entity\Contact;
use App\Entity\Projet;
use App\Entity\Tag;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
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
        $submenu1 = [
            MenuItem::linkToCrud('Modifier les identifiants', 'fas fa-user', User::class),
            MenuItem::linktoRoute('Reset mot de passe', 'fas fa-key', 'app_forgot_password_request'),
            MenuItem::linktoRoute('Supprimer le compte', 'fas fa-trash-alt', 'user.deleteprofile'),
        ];

        yield MenuItem::section('Site', 'fas fa-folder-open');
        yield MenuItem::linktoRoute('Homepage', 'fas fa-home', 'home')->setLinkTarget('_blank');

        yield MenuItem::section('Administration Mixes', 'fas fa-folder-open');
        yield MenuItem::linkToCrud('Mixes', 'fas fa-music', Projet::class);
        yield MenuItem::linkToCrud('Tags', 'fas fa-tag', Tag::class);

        yield MenuItem::section('Messages', 'fas fa-folder-open');
        yield MenuItem::linkToCrud('Messages reçus', 'fas fa-envelope', Contact::class);

        yield MenuItem::section('Account', 'fas fa-folder-open');
        yield MenuItem::subMenu('Données Utilisateur', 'fas fa-exclamation')->setSubItems($submenu1);
    }

    /**
     * @Route("/admin")
     */
    public function index(): Response
    {
        return $this->render('admin_projet/charts.html.twig');
    }
}
