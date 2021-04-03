<?php

namespace App\Controller\Admin;

use App\Entity\Projet;
use App\Repository\ProjetRepository;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class MixesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Projet::class;
    }


    /**
     * Page with all the details of the project
     * @Route("/mix/{slug}-{id}", name="projet.show", requirements={"slug": "[a-z0-9\-]*"})
     * @param Projet $projet
     * @param string $slug
     * @param EntityManagerInterface $manager
     * @return RedirectResponse|Response
     */
    public function show(Projet $projet, string $slug, EntityManagerInterface $manager)
    {
        return $this->redirectToRoute('projet.show', [
            'id' => $projet->getId(),
            'slug' => $projet->getSlug()
        ]);
    }


    public function configureActions(Actions $actions): Actions
    {

        $detailMix = Action::new('detailMix', 'Detail', 'far fa-plus-square')
            ->linkToCrudAction(Crud::PAGE_DETAIL)
            ->addCssClass('btn btn-info');

        $voirMix = Action::new('voirMix', 'Voir sur le site', 'fas fa-external-link-alt')
            ->linkToRoute('projet.show', function (Projet $projet) {
                return [
                    'id' => $projet->getId(),
                    'slug' => $projet->getSlug()
                ];
            })
            ->addCssClass('btn btn-success');


        return $actions
            ->setPermission(Action::NEW, 'ROLE_ADMIN')
            ->setPermission(Action::EDIT, 'ROLE_ADMIN')
            ->disable(Action::DELETE)
            ->add(Crud::PAGE_INDEX, $detailMix)
            ->add(Crud::PAGE_INDEX, $voirMix);
    }


    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Liste des Mixes')
            ->setPageTitle(Crud::PAGE_NEW, 'Ajouter nouveau Mix')
            ->setSearchFields(['id', 'filename', 'mp3filename', 'title', 'description', 'YTB_link', 'views', 'downloadCount', 'soundcloud', 'fileSize', 'fileLength', 'mixcloud'])
            ->setDefaultSort(['created_at' => 'DESC']);
    }

    public function configureFields(string $pageName): iterable
    {
        $title = TextField::new('title', 'Nom');
        $description = TextEditorField::new('description');
        $tags = AssociationField::new('tags', 'Catégories');
        $imageFile = Field::new('imageFile', 'Fichier Image')->setFormType(VichImageType::class);
        $ytbLink = Field::new('ytb_link', 'Lien Youtube');
        $mp3File = Field::new('mp3File', 'Fichier MP3')->setFormType(VichFileType::class);
        $soundcloud = TextField::new('soundcloud');
        $iframeSoundcloud = TextField::new('iframeSoundcloud', 'iFrame Soundcloud');
        $fileSize = IntegerField::new('fileSize', 'Taille du fichier');
        $id = IntegerField::new('id', 'ID');
        $filename = ImageField::new('filename', 'Image')->setBasePath('/images/projets');
        $mp3filename = TextField::new('mp3filename');
        $createdAt = DateTimeField::new('created_at', 'Publié le');
        $updatedAt = DateTimeField::new('updated_at', 'Mis à jour le');
        $yTBLink = TextField::new('YTB_link', 'Lien Youtube');
        $views = IntegerField::new('views', "Vues");
        $downloadCount = IntegerField::new('downloadCount', "Downloads");
        $fileLength = TextField::new('fileLength', "Durée");
        $user = AssociationField::new('user');
        $isOnline = BooleanField::new('isOnline', 'En ligne');

        if (Crud::PAGE_INDEX === $pageName) {
            return [$title, $createdAt, $views, $downloadCount, $filename, $isOnline];
        } elseif (Crud::PAGE_DETAIL === $pageName) {
            return [$id, $filename, $mp3filename, $title, $description, $createdAt, $updatedAt, $yTBLink, $views, $downloadCount, $soundcloud, $fileSize, $fileLength, $iframeSoundcloud, $isOnline, $user, $tags];
        } elseif (Crud::PAGE_NEW === $pageName) {
            return [$title, $description, $tags, $imageFile, $ytbLink, $mp3File, $soundcloud, $iframeSoundcloud, $fileSize, $isOnline];
        } elseif (Crud::PAGE_EDIT === $pageName) {
            return [$title, $description, $tags, $imageFile, $ytbLink, $mp3File, $soundcloud, $iframeSoundcloud, $fileSize, $isOnline];
        }
    }
}
