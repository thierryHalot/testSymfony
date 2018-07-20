<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpCache\ResponseCacheStrategy;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        $personnes = array(
            "premier" => array('prenom' => 'Jessy', 'nom' => 'Brown', 'telephone' => array( 'nom'=>'nokia', 'numeros'=>'0658075689')),
            "deusieme" => array('prenom' => 'Sharon', 'nom' => 'Dain', 'telephone' => array( 'nom'=>'samsung', 'numeros'=>'0658075689')),
            "troisieme" => array('prenom' => 'Marta', 'nom' => 'Blanca', 'telephone' => array( 'nom'=>'iphone', 'numeros'=>'0658075689'))
        );

        $test = "helloWorld";
        $tableau = array(

            'controller_name' => 'TestController',
            'test'=> $test,
            'users'=> $personnes

    );

        return $this->render('test/index.html.twig', $tableau);
    }
}
