<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GoldController extends AbstractController
{
    #[Route('/gold', name: 'app_gold')]
    public function index(): Response
    {
        return new Response('Hello World');
    }
    #[Route('/bye', name: 'app_bye')]
    public function goodBye(): Response
    {
        return new Response('Good Bye World');
    }
    #[Route('/welcome', name: 'app_welcome')]
    public function welcome(): Response
    {
        return new Response('Welcome World');
    }
    #[Route('/welcome/{name}', name: 'app_welcome_name')]
    public function getName($name): Response
    {
        return new Response('Welcome '.$name);
    }
}
