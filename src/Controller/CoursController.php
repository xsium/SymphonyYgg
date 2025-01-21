<?php

namespace App\Controller;

use App\Repository\CoursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CoursController extends AbstractController
{
    #[Route('/cours', name: 'app_cours')]
    public function index(CoursRepository $coursRepository): Response
    {
        $cours = $coursRepository->findAll();

        return $this->render('cours/index.html.twig', [
            'cours' => $cours,
        ]);
    }
}
