<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/jeremy')]
class JeremyController extends AbstractController
{
    #[Route('/', name: 'app_jeremy_')]

    // function findAllChapitres($chapitre): array
    // {
    //     // $entityManager = $this->getEntityManager();
    
    //     $query = $entityManager->createQuery(
    //         'SELECT u
    //         FROM App\Entity\Chapitre u
    //         WHERE u.chapitre = :chapitre
    //         ORDER BY u.chapitre ASC'
    //     )->setParameter('chapitre', $chapitre);
    
    //     return $query->getResult();
    // }


    public function index(): Response
    {
        $chapitres = [
            ['titre' => 'Chapitre 1', 'niveau' => 'Débutant', 'valide' => true, 'contenu' => 'Contenu du chapitre 1...'],
            ['titre' => 'Chapitre 2', 'niveau' => 'Intermédiaire', 'valide' => false, 'contenu' => 'Contenu du chapitre 2...'],
        ];

        $chapitreActuel = $chapitres[0]; 

        $dateMiseAJour = new \DateTime('2023-09-25');

        return $this->render('jeremy/base.html.twig', [
            'chapitres' => $chapitres,
            'chapitreActuel' => $chapitreActuel,
            'dateMiseAJour' => $dateMiseAJour,
        ]);
    }

    #[Route('/je', name: 'app_jeremy_je')]
    public function je(): Response
    {
        return $this->render('jeremy/base.html.twig', [
            'controller_name' => 'Jeremy ',
        ]);
    }
}
