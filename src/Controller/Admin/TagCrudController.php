<?php

namespace App\Controller\Admin;

use App\Entity\Tag;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;

class TagCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Tag::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Tag')
            ->setEntityLabelInPlural('Tag')
            ->setPageTitle(Crud::PAGE_INDEX, 'Liste des Catégories')
            ->setPageTitle(Crud::PAGE_NEW, 'Ajouter nouveau genre')
            ->setSearchFields(['id', 'name']);
    }

    public function configureFields(string $pageName): iterable
    {
        $name = TextareaField::new('name', 'Nom');
        $id = IntegerField::new('id', 'ID');
        $projets = AssociationField::new('projets', "Mixes");

        if (Crud::PAGE_INDEX === $pageName) {
            return [$name, $projets];
        } elseif (Crud::PAGE_DETAIL === $pageName) {
            return [$id, $name, $projets];
        } elseif (Crud::PAGE_NEW === $pageName) {
            return [$name];
        } elseif (Crud::PAGE_EDIT === $pageName) {
            return [$name];
        }
    }
}
