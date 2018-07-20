<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TwigController extends Controller
{
    /**
     * @Route("/twig", name="twig")
     */
    public function index()
    {
        return $this->render('twig/index.html.twig', [
            'controller_name' => 'TwigController',
        ]);
    }
}
