<?php

namespace App\Controller\Admin;

use App\Entity\Contact;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ContactCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Contact::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Contact')
            ->setEntityLabelInPlural('Contact')
            ->setPageTitle(Crud::PAGE_INDEX, 'Liste des Messages reçus')
            ->setSearchFields(['id', 'name', 'email', 'subject', 'message'])
            ->setDefaultSort(['createdAt' => 'DESC']);
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Action::EDIT, Action::NEW);
    }


    public function configureFields(string $pageName): iterable
    {
        $name = TextField::new('name', 'Nom');
        $email = EmailField::new('email', 'Email');
        $subject = TextField::new('subject', 'Objet');
        $message = TextEditorField::new('message', 'Message');
        $createdAt = DateTimeField::new('createdAt', "Reçu le");
        $updatedAt = DateTimeField::new('updatedAt');
        $id = IntegerField::new('id', 'ID');

        if (Crud::PAGE_INDEX === $pageName) {
            return [$createdAt, $name, $email, $subject, $message];
        } elseif (Crud::PAGE_DETAIL === $pageName) {
            return [$id, $name, $email, $subject, $message, $createdAt, $updatedAt];
        } elseif (Crud::PAGE_NEW === $pageName) {
            return [$name, $email, $subject, $message, $createdAt, $updatedAt];
        } elseif (Crud::PAGE_EDIT === $pageName) {
            return [$name, $email, $subject, $message, $createdAt, $updatedAt];
        }
    }
}
