<?php

namespace App\Controller;

use App\Repository\ProjetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminProjetController extends AbstractController
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
     * Stats basic
     * @Route("/admin/basic_charts", name="admin.charts")
     * @return Response
     */
    public function Basic_charts()
    {

        return $this->render('admin_projet/charts.html.twig');

    }

}
