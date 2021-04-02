<?php

namespace App\Controller\Admin;

use App\Entity\Projet;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class MixesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Projet::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Liste des Mixes')
            ->setPageTitle(Crud::PAGE_NEW, 'Ajouter nouveau Mix')
            ->setSearchFields(['id', 'filename', 'mp3filename', 'title', 'description', 'YTB_link', 'views', 'downloadCount', 'soundcloud', 'fileSize', 'fileLength', 'mixcloud']);
    }

    public function configureFields(string $pageName): iterable
    {
        $title = TextField::new('title');
        $description = TextareaField::new('description');
        $tags = AssociationField::new('tags');
        $imageFile = Field::new('imageFile', 'Fichier Image');
        $ytbLink = Field::new('ytb_link', 'Lien Youtube');
        $mp3File = Field::new('mp3File', 'Fichier MP3');
        $soundcloud = TextField::new('soundcloud');
        $mixcloud = TextField::new('mixcloud');
        $fileSize = IntegerField::new('fileSize');
        $id = IntegerField::new('id', 'ID');
        $filename = TextField::new('filename');
        $mp3filename = TextField::new('mp3filename');
        $createdAt = DateTimeField::new('created_at');
        $updatedAt = DateTimeField::new('updated_at');
        $yTBLink = TextField::new('YTB_link');
        $views = IntegerField::new('views');
        $downloadCount = IntegerField::new('downloadCount');
        $fileLength = TextField::new('fileLength');
        $user = AssociationField::new('user');

        if (Crud::PAGE_INDEX === $pageName) {
            return [$title, $updatedAt, $views, $downloadCount];
        } elseif (Crud::PAGE_DETAIL === $pageName) {
            return [$id, $filename, $mp3filename, $title, $description, $createdAt, $updatedAt, $yTBLink, $views, $downloadCount, $soundcloud, $fileSize, $fileLength, $mixcloud, $user, $tags];
        } elseif (Crud::PAGE_NEW === $pageName) {
            return [$title, $description, $tags, $imageFile, $ytbLink, $mp3File, $soundcloud, $mixcloud, $fileSize];
        } elseif (Crud::PAGE_EDIT === $pageName) {
            return [$title, $description, $tags, $imageFile, $ytbLink, $mp3File, $soundcloud, $mixcloud, $fileSize];
        }
    }
}
