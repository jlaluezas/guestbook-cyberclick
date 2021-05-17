<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ConferenceController extends AbstractController
{
    public function __invoke(): Response
    {
        return $this->render('conference/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}