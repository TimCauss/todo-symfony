<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return $this->render('Todo/homepage.html.twig');
    }

    #[Route('/login')]
    public function loginPage(): Response
    {
        return $this->render('Todo/loginpage.html.twig');
    }

    #[Route('/forgot')]
    public function forgotPage(): Response
    {
        return $this->render('Todo/forgotpage.html.twig');
    }
}
