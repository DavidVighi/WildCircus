<?php

namespace App\Controller;

use App\Repository\PricesRepository;
use App\Repository\TextjumbotronRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PricingController extends AbstractController
{
    /**
     * @Route("/pricing", name="app_Pricing")
     */
    public function index(PricesRepository $pricesRepository, TextjumbotronRepository $textjumbotronRepository)
    {
        return $this->render("mainPage/pricing.html.twig",
            [
                'prices' => $pricesRepository->findAll(),
                'textjumbotrons' => $textjumbotronRepository->findAll()[0],
            ]);
    }
}