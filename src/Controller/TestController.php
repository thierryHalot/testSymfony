<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        $test = "helloWorld";
        $tableau = array(

            'controller_name' => 'TestController',
            'test'=> $test,

    );
        return $this->render('test/index.html.twig', $tableau);
    }
}
