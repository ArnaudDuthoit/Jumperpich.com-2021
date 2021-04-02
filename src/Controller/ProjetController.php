<?php

namespace App\Controller;


use App\Data\SearchData;
use App\Entity\Projet;
use App\Form\SearchForm;
use App\Form\SearchFormType;
use App\Repository\ProjetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Vich\UploaderBundle\Handler\DownloadHandler;

class ProjetController extends AbstractController
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
     * Index page of all the projects (with research function)
     * @Route("/mixes", name="projet.index")
     * @param ProjetRepository $repository
     * @param Request $request
     * @return Response
     */
    public function index(ProjetRepository $repository, Request $request)
    {

        $data = new SearchData();

        $data->page = $request->get('page', 1);
        $form = $this->createForm(SearchFormType::class, $data);
        $form->handleRequest($request);
        $projets = $repository->findSearch($data);


        if ($request->get('ajax') || $request->isXmlHttpRequest()) {
            return new JsonResponse([
                'content' => $this->renderView('projet/_projets.html.twig', ['projets' => $projets]),
                'sorting' => $this->renderView('projet/_sorting.html.twig', ['projets' => $projets]),
                'pagination' => $this->renderView('projet/_pagination.html.twig', ['projets' => $projets]),
                'pages' => ceil($projets->getTotalItemCount() / $projets->getItemNumberPerPage())
            ]);
        }

        return $this->render('projet/index.html.twig', [
            'projets' => $projets,
            'form' => $form->createView(),
            'pages' => ceil($projets->getTotalItemCount() / $projets->getItemNumberPerPage()),
            'current_menu' => 'mixes'
        ]);


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

        if ($projet->getSlug() !== $slug) {
            return $this->redirectToRoute('projet.show', [
                'id' => $projet->getId(),
                'slug' => $projet->getSlug()
            ], 301);
        }

        $views = $projet->getViews();

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_ANONYMOUSLY'); // Récupère l'info si c'est un utilisateur anonyme

        $user = $this->getUser();

        if ($user === null) { // Si c'est un anonyme on augmente la nombre de page vues
            $projet->setViews($views + 1);
        }

        $manager->persist($projet);
        $manager->flush();


        return $this->render('projet/show.html.twig', [
            'projet' => $projet,
        ]);
    }

    /**
     * Download Count
     * @Route("/download/mp3/{mp3filename}", name="downloadcount")
     * @param Projet $projet
     * @param Request $request
     * @param DownloadHandler $downloadHandler
     * @return RedirectResponse|Response
     */
    public function download(Projet $projet, Request $request, DownloadHandler $downloadHandler)

    {

        $mp3filename = $projet->getMp3filename();

        $entityManager = $this->getDoctrine()->getManager();
        $projet = $entityManager->getRepository(Projet::class)->findOneBy(['mp3filename' => $mp3filename]);


        $download = $projet->getDownloadCount();

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_ANONYMOUSLY'); // Récupère l'info si c'est un utilisateur anonyme

        $user = $this->getUser();

        if ($user === null) { // Si c'est un anonyme on augmente la nombre de téléchargement
            $projet->setDownloadCount($download + 1);
        }

        $entityManager->persist($projet);
        $entityManager->flush();

        return $downloadHandler->downloadObject($projet, $fileField = 'mp3File');


    }

}
