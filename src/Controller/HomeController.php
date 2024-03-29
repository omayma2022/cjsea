<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('home.html.twig');
    }
     /**
     * @Route("/contact", name="contactpage")
     */
    public function contact()
    {
        return $this->render('contact.html.twig');
    }
    /**
     * @Route("/Historique", name="historypage")
     */
    public function historique()
    {
        return $this->render('historique.html.twig');
    }
        /**
     * @Route("/evenement", name="eventpage")
     */
    public function evenement()
    {
        return $this->render('event.html.twig');
    }
}
