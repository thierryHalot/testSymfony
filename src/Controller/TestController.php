<?php

namespace App\Controller;

use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;
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

        $package = new Package(new EmptyVersionStrategy());

        $logo = $package->getUrl('/vide.png', 'img');

        $test = "helloWorld";
        $tableau = array(

            'controller_name' => 'TestController',
            'test'=> $test,
            'users'=> $personnes,
            'logo'=> $logo
    );

        return $this->render('test/index.html.twig', $tableau);
    }
}
