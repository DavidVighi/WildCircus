<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PerformancesController extends AbstractController
{
    /**
     * @Route("/performances", name="app_Performances")
     */
    public function number()
    {
        return $this->render("mainPage/performances.html.twig",
            [

            ]);
    }
}