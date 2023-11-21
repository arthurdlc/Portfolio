<?php

namespace App\Controller;

use App\Entity\CompetencesReseau;
use App\Form\CompetencesReseauType;
use App\Repository\CompetencesReseauRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/competences/reseau')]
class CompetencesReseauController extends AbstractController
{
    #[Route('/', name: 'app_competences_reseau_index', methods: ['GET'])]
    public function index(CompetencesReseauRepository $competencesReseauRepository): Response
    {
        return $this->render('competences_reseau/index.html.twig', [
            'competences_reseaus' => $competencesReseauRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_competences_reseau_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $competencesReseau = new CompetencesReseau();
        $form = $this->createForm(CompetencesReseauType::class, $competencesReseau);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($competencesReseau);
            $entityManager->flush();

            return $this->redirectToRoute('app_competences_reseau_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('competences_reseau/new.html.twig', [
            'competences_reseau' => $competencesReseau,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_competences_reseau_show', methods: ['GET'])]
    public function show(CompetencesReseau $competencesReseau): Response
    {
        return $this->render('competences_reseau/show.html.twig', [
            'competences_reseau' => $competencesReseau,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_competences_reseau_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CompetencesReseau $competencesReseau, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CompetencesReseauType::class, $competencesReseau);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_competences_reseau_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('competences_reseau/edit.html.twig', [
            'competences_reseau' => $competencesReseau,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_competences_reseau_delete', methods: ['POST'])]
    public function delete(Request $request, CompetencesReseau $competencesReseau, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$competencesReseau->getId(), $request->request->get('_token'))) {
            $entityManager->remove($competencesReseau);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_competences_reseau_index', [], Response::HTTP_SEE_OTHER);
    }
}
