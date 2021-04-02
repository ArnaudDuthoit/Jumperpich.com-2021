<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('User')
            ->setEntityLabelInPlural('User')
            ->setPageTitle(Crud::PAGE_INDEX, 'Liste des Utilisateurs')
            ->setSearchFields(['id', 'email', 'username', 'role', 'Active', 'RegistrationToken', 'resetToken']);
    }

    public function configureFields(string $pageName): iterable
    {
        $email = TextField::new('email');
        $username = TextField::new('username');
        $id = IntegerField::new('id', 'ID');
        $password = TextField::new('password');
        $role = TextField::new('role');
        $active = IntegerField::new('Active');
        $registrationToken = TextField::new('RegistrationToken');
        $resetToken = TextField::new('resetToken');
        $projets = AssociationField::new('projets');

        if (Crud::PAGE_INDEX === $pageName) {
            return [$email, $username, $role];
        } elseif (Crud::PAGE_DETAIL === $pageName) {
            return [$id, $email, $username, $password, $role, $active, $registrationToken, $resetToken, $projets];
        } elseif (Crud::PAGE_NEW === $pageName) {
            return [$email, $username];
        } elseif (Crud::PAGE_EDIT === $pageName) {
            return [$email, $username];
        }
    }
}
