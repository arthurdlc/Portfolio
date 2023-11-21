<?php

namespace App\Controller;

use App\Entity\CompetencesSLAM;
use App\Form\CompetencesSLAMType;
use App\Repository\CompetencesSLAMRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/competences/s/l/a/m')]
class CompetencesSLAMController extends AbstractController
{
    #[Route('/', name: 'app_competences_s_l_a_m_index', methods: ['GET'])]
    public function index(CompetencesSLAMRepository $competencesSLAMRepository): Response
    {
        return $this->render('competences_slam/index.html.twig', [
            'competences_s_l_a_ms' => $competencesSLAMRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_competences_s_l_a_m_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $competencesSLAM = new CompetencesSLAM();
        $form = $this->createForm(CompetencesSLAMType::class, $competencesSLAM);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($competencesSLAM);
            $entityManager->flush();

            return $this->redirectToRoute('app_competences_s_l_a_m_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('competences_slam/new.html.twig', [
            'competences_s_l_a_m' => $competencesSLAM,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_competences_s_l_a_m_show', methods: ['GET'])]
    public function show(CompetencesSLAM $competencesSLAM): Response
    {
        return $this->render('competences_slam/show.html.twig', [
            'competences_s_l_a_m' => $competencesSLAM,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_competences_s_l_a_m_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CompetencesSLAM $competencesSLAM, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CompetencesSLAMType::class, $competencesSLAM);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_competences_s_l_a_m_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('competences_slam/edit.html.twig', [
            'competences_s_l_a_m' => $competencesSLAM,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_competences_s_l_a_m_delete', methods: ['POST'])]
    public function delete(Request $request, CompetencesSLAM $competencesSLAM, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$competencesSLAM->getId(), $request->request->get('_token'))) {
            $entityManager->remove($competencesSLAM);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_competences_s_l_a_m_index', [], Response::HTTP_SEE_OTHER);
    }
}
