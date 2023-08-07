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

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        if ($slug) {
            $title = 'Genre: ' . u(str_replace('-', ' ', $slug))->title(true);
        } else {
            $title = "All Genres";
        }
        return new Response($title);
    }
}
