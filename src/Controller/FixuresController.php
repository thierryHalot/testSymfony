<?php

namespace App\Controller;

use App\Entity\Apprenant;
use App\Entity\Cours;
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
     * @Route("/apprenant", name="apprenant")
     */
    public function generateApprenant(){

        $em = $this->getDoctrine()->getManager();

        $em->persist(new Apprenant('titi','titi@email','titi'));
        $em->persist(new Apprenant('cedric','cedric@email','cedric'));
        $em->persist(new Apprenant('fred','fred@email','fred'));
        $em->persist(new Apprenant('lolo','lolo@email','lolo'));
        $em->flush();

        return new Response();
    }

    /**
     * @Route("/cour", name="cour")
     */
    public function generateCour(){

        $em = $this->getDoctrine()->getManager();

        $em->persist(new Cours('manipulation du DOM','Tous dabord il faut....'));
        $em->persist(new Cours('leaflet','Sert a crée des map en js'));
        $em->persist(new Cours('background-color','vous pourrez avoir de magnifique fond en css '));
        $em->persist(new Cours('get element by id','commencer par crée une div avec un id...'));
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
