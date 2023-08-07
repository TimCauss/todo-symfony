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

        $tasks = [
            ['name' => 'Gangaga\'s Paradise', 'status' => 'Coolio'],
            ['name' => 'Waterfalls', 'status' => 'TLC'],
            ['name' => 'Creep', 'status' => 'Radiohead'],
            ['name' => 'Kiss from a Rose', 'status' => 'Seal'],
            ['name' => 'On Bended Knee', 'status' => 'Boyz II Men'],
            ['name' => 'Fantasy', 'status' => 'Mariah Carey'],
        ];


        return $this->render('Todo/homepage.html.twig', [
            'title' => 'Tasks List:',
            'tasks' => $tasks,
        ]);
    }

    #[Route('/login')]
    public function loginPage(): Response
    {
        return $this->render('Todo/loginpage.html.twig');
    }

    
    #[Route('/register')]
    public function registerPage(): Response
    {
        return $this->render('Todo/registerpage.html.twig');
    }

    #[Route('/forgot')]
    public function forgotPage(): Response
    {
        return $this->render('Todo/forgotpage.html.twig');
    }
}