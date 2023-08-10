<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main_homepage')]
    public function homepage(): Response
    {
        return $this->render('Todo/homepage.html.twig');
    }

    #[Route('/forgot')]
    public function forgotPage(): Response
    {
        return $this->render('Todo/forgotpage.html.twig');
    }

    #[Route('/dashboard', name: 'app_dashboard')]
    public function dashboard(): Response
    {
        return $this->render('Todo/dashboard.html.twig');
    }
    
}