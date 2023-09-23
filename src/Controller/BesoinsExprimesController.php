<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class BesoinsExprimesController extends AbstractController
{
    #[Route('/besoins/exprimes', name: 'app_besoins_exprimes')]
    public function index(): JsonResponse
    {
        return $this-> render('audit/index.html.twig');
    }
}
