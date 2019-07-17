<?php

namespace App\Controller;

use App\Entity\Performancesimage;
use App\Form\PerformancesimageType;
use App\Repository\PerformancesimageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/performancesimage")
 */
class PerformancesimageController extends AbstractController
{
    /**
     * @Route("/", name="performancesimage_index", methods={"GET"})
     */
    public function index(PerformancesimageRepository $performancesimageRepository): Response
    {
        return $this->render('performancesimage/index.html.twig', [
            'performancesimages' => $performancesimageRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="performancesimage_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $performancesimage = new Performancesimage();
        $form = $this->createForm(PerformancesimageType::class, $performancesimage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($performancesimage);
            $entityManager->flush();

            return $this->redirectToRoute('performancesimage_index');
        }

        return $this->render('performancesimage/new.html.twig', [
            'performancesimage' => $performancesimage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="performancesimage_show", methods={"GET"})
     */
    public function show(Performancesimage $performancesimage): Response
    {
        return $this->render('performancesimage/show.html.twig', [
            'performancesimage' => $performancesimage,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="performancesimage_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Performancesimage $performancesimage): Response
    {
        $form = $this->createForm(PerformancesimageType::class, $performancesimage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('performancesimage_index');
        }

        return $this->render('performancesimage/edit.html.twig', [
            'performancesimage' => $performancesimage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="performancesimage_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Performancesimage $performancesimage): Response
    {
        if ($this->isCsrfTokenValid('delete'.$performancesimage->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($performancesimage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('performancesimage_index');
    }
}
