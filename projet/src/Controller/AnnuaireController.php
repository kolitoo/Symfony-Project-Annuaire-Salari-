<?php

namespace App\Controller;

use App\Entity\Annuaire;
use App\Form\AnnuaireType;
use App\Repository\AnnuaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AnnuaireController extends AbstractController {
    #[Route('/annuaire', name: 'annuaire')]
    public function index(AnnuaireRepository $repository): Response {

        return $this->render('pages/entreprise/index.html.twig', [
            'annuaire' => $repository->findAll()
        ]);
    }

    #[Route('/entreprise/nouveau', name:'enteprise_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $manager 
        ) : Response {

        $annuaire = new Annuaire();
        $form = $this->createForm(AnnuaireType::class, $annuaire);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $annuaire = $form->getData();

            $manager->persist($annuaire);
            $manager->flush();

            $this->addFlash(
                'success',
                'Votre ligne a été ajoutée dans l\'annuaire'
            );
            return $this->redirectToRoute("annuaire");
        }

        return $this->render('pages/entreprise/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/entreprise/edition/{id}', 'entreprise.edit', methods:['GET', 'POST'])]
    public function edit(
        Annuaire $annuaire,
         Request $request, 
         EntityManagerInterface $manager
         ):Response {

        $form = $this->createForm(AnnuaireType::class, $annuaire);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $annuaire = $form->getData();

            $manager->persist($annuaire);
            $manager->flush();

            $this->addFlash(
                'success',
                'Votre ligne a été modifiée dans l\'annuaire'
            );
            return $this->redirectToRoute("annuaire");
        }

        $form = $this->createForm(AnnuaireType::class, $annuaire);

        return $this->render('pages/entreprise/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/entreprise/suppression/{id}', 'entreprise.delete', methods:['GET'])]
    public function delete(
        Annuaire $annuaire,
         EntityManagerInterface $manager
         ):Response {
        $manager->remove($annuaire);
        $manager->flush();

        $this->addFlash(
            'success',
            'Votre ligne a été supprimé avec succès'
        );
        return $this->redirectToRoute("annuaire");
    }
}