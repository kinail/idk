<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsletterControlleurController extends AbstractController
{
    #[Route('/newsletter/controlleur', name: 'app_newsletter_controlleur')]
    public function index(): Response
    {
        return $this->render('newsletter_controlleur/index.html.twig', [
            'controller_name' => 'NewsletterControlleurController',
        ]);
    }
}
