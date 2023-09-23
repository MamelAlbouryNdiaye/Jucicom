<?php

namespace App\Controller;

use App\Repository\StructureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StructureController extends AbstractController
{
   
    public function __construct(
    
        private StructureRepository  $repos,
        private EntityManagerInterface $em
        )
   {
    
   }

    #[Route('/structure', name: 'app_structure')]
    public function index(): Response
    {
        $structure = $this->repos->findAll();
        return $this->render('structure/index.html.twig', [
            'structures' => $structure,
        ]);
    }
}
