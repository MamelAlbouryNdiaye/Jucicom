<?php

namespace App\Controller;

use App\Entity\ResultatAudit;
use App\Entity\Structure;
use App\Repository\ResultatAuditRepository;
use App\Repository\StructureRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuditExistantController extends AbstractController
{
   public function __construct(
    
        private ResultatAuditRepository  $repos,
        private StructureRepository $StructRepo,
        private EntityManagerInterface $em
        )
   {
    
   }


    #[Route('/audit', name: 'app_audit_existant')]
    public function index(): Response
    {
          $audit_ = $this->repos->findAll();
          $structures = $this->StructRepo->findAll();
          //dd($structures);
          //dd($audit_);
    //    $audit_->setDetails(' Auditer en matiere d\'existant SI de CFJ '); 
    //    $audit_->setEtat('terminé');
    //    $audit_->setCommentaires('Commentaire 1');
    //    $audit_->setSolution('Voir modelisation');
    //    $audit_->setDocAnnexes('Doc 1');

    //    //percisting
    //    $this->em->persist($audit_);
    //    $this->em->flush();



    //    dd($audit_);

    //    dump($audit_);
    //    die;
    // dd($audit_);


    //$repo = $em->getRepository(ResultatAudit::class);

    //dd($repo->findAll());
        return $this-> render('audit/index.html.twig', ["audit_" => $audit_, "structures"=>$structures]);
    }


    #[Route('/etude/create', name: 'creer_etude', methods:  ["GET" , "POST"])]
    public function new(Request $request):Response{
        $structures = $this->StructRepo->findAll();
        if($request->isMethod('POST')){
            $data = $request->request->all();
            $valustructure=intval($data["structure"]);
            $objValustructure=$this->StructRepo->findOneBy(["id"=>$valustructure]);
                $audit_ = new ResultatAudit;
                $audit_->setDetails($data["Details"]);
                $audit_->setEtat($data["Etat"]);
                $audit_->setCommentaires($data["Commentaire"]);
                $audit_->setSolution($data["solution"]);
                $audit_->setDocAnnexes("Document");
                $audit_->setStructure($objValustructure);
                $this->em->persist($audit_);
                $this->em->flush();
            return $this->render('structure/index.html.twig',[
                'structures' => $structures,
            ] );
        }

        return $this->render('audit/create.html.twig',[
            'structures' => $structures,
        ]);
    }

}
