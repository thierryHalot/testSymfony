<?php

namespace App\Controller;

use App\Entity\Theme;
use App\Repository\ThemeRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FixuresController extends Controller
{
    /**
     * @Route("/fixures", name="fixures")
     */
    public function index()
    {
         $this->generateTheme();
         return new Response();
    }

    /**
     * @Route("/lala", name="lala")
     */
//fonction qui permet de générer mes theme
    public function generateTheme(){
        //doctrine est notre couche d'accses au donné, getManger correspond au dao
        $em = $this->getDoctrine()->getManager();

        //je crée mon entitée theme

        $em->persist(new Theme("HTML"));
        $em->persist(new Theme("CSS"));
        $em->persist(new Theme("JS"));
        $em->persist(new Theme("JAVA"));
        $em->persist(new Theme("PYTHON"));
        $em->flush();

        return new Response();
    }

    /**
     * @Route("/themeALL", name="themeALL")
     */
    //fonction qui permet de récupérer mes themes
    public function getThemes(){

        $theme = $this->getDoctrine()->getRepository(Theme::class)->findAll();



        return $this->render('fixures/index.html.twig', [
            'controller_name' => 'fixureController',
            'theme'=> $theme
        ]);





    }
    /**
     * @Route("/themee", name="themee")
     */
    public function test(){



        $test = $this->getDoctrine()->getRepository(ThemeRepository::class);

        var_dump($test->test());




    }
}
