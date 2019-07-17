<?php

namespace App\Controller;

use App\Entity\Textjumbotron;
use App\Form\TextjumbotronType;
use App\Repository\TextjumbotronRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/textjumbotron")
 */
class TextjumbotronController extends AbstractController
{
    /**
     * @Route("/", name="textjumbotron_index", methods={"GET"})
     */
    public function index(TextjumbotronRepository $textjumbotronRepository): Response
    {
        return $this->render('textjumbotron/index.html.twig', [
            'textjumbotrons' => $textjumbotronRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="textjumbotron_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $textjumbotron = new Textjumbotron();
        $form = $this->createForm(TextjumbotronType::class, $textjumbotron);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($textjumbotron);
            $entityManager->flush();

            return $this->redirectToRoute('textjumbotron_index');
        }

        return $this->render('textjumbotron/new.html.twig', [
            'textjumbotron' => $textjumbotron,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="textjumbotron_show", methods={"GET"})
     */
    public function show(Textjumbotron $textjumbotron): Response
    {
        return $this->render('textjumbotron/show.html.twig', [
            'textjumbotron' => $textjumbotron,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="textjumbotron_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Textjumbotron $textjumbotron): Response
    {
        $form = $this->createForm(TextjumbotronType::class, $textjumbotron);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('textjumbotron_index');
        }

        return $this->render('textjumbotron/edit.html.twig', [
            'textjumbotron' => $textjumbotron,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="textjumbotron_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Textjumbotron $textjumbotron): Response
    {
        if ($this->isCsrfTokenValid('delete'.$textjumbotron->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($textjumbotron);
            $entityManager->flush();
        }

        return $this->redirectToRoute('textjumbotron_index');
    }
}
