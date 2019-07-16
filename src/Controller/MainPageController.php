<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainPageController extends AbstractController
{
    /**
     * @Route("/", name="app_MainPage")
     */
    public function number()
    {
        return $this->render("mainPage/index.html.twig",
            [

        ]);
    }
}