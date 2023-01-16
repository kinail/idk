<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(): Response
    {   

        $formulaire = $this->createForm(ContactType::class);
        

        $niveau_eleve="Ca va sympa tranquille la misere";
return $this->renderForm('contact/index.html.twig', 
        [
            'nom_formateur'=>'gervais-dambry',
            'prenom'=>'kevin',
            'Niveau_formateur'=>'Excellent !',
            'niveau_eleve'=>$niveau_eleve,
            'formulaire'=>$formulaire,
        ] 
        );
    }
}
