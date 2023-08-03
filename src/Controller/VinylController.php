<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController extends AbstractController
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


        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'Ceci est la variable title',
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
