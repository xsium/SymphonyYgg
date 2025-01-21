<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/yggdrasil', name: 'app_yggdrasil_')]
class YggdrasilController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('yggdrasil/index.html.twig', [
            'controller_name' => 'YggdrasilController',
        ]);
    }

    #[Route('/connect', name: 'connect')]
    public function connect(): Response
    {
        return $this->render('yggdrasil/connect.html.twig', [
            'controller_name' => 'YggdrasilController Connect',
        ]);
    }
}
