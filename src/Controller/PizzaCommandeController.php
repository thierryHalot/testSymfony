<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PizzaCommandeController extends Controller
{
    /**
     * @Route("/pizza/commande", name="pizza_commande")
     */
    public function index()
    {
        return $this->render('pizza_commande/index.html.twig', [
            'controller_name' => 'PizzaCommandeController',
        ]);
    }
}
