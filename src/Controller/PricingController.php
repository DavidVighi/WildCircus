<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PricingController extends AbstractController
{
    /**
     * @Route("/pricing", name="app_Pricing")
     */
    public function number()
    {
        return $this->render("mainPage/pricing.html.twig",
            [

            ]);
    }
}