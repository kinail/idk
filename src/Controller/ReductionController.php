<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReductionController extends AbstractController
{
    #[Route('/reduction', name: 'app_reduction')]
    public function index(): Response
    {
        $formulaire = $this->createForm(ReductionType::class);


        return $this->renderForm('reduction/index.html.twig', [
            'controller_name' => 'ReductionController',
            'Formulaire'=>$formulaire
        ]);
    }
}
