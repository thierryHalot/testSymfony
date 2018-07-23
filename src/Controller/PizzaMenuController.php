<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PizzaMenuController extends Controller
{
    /**
     * @Route("/pizza/menu", name="pizza_menu")
     */
    public function index()
    {
        return $this->render('pizza_menu/index.html.twig', [
            'controller_name' => 'PizzaMenuController',
        ]);
    }
}
