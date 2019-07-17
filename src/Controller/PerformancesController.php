<?php

namespace App\Controller;

use App\Repository\TextjumbotronRepository;
use App\Repository\PerformancesimageRepository;
use App\Form\PerformancesimageType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PerformancesController extends AbstractController
{
    /**
     * @Route("/performances", name="app_Performances")
     */
    public function index(PerformancesimageRepository $performancesimageRepository, TextjumbotronRepository $textjumbotronRepository)
    {
        return $this->render("mainPage/performances.html.twig",
            [
                'performancesimages' => $performancesimageRepository->findAll(),
                'textjumbotrons' => $textjumbotronRepository->findAll()[0],
            ]);
    }
}