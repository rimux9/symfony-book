<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ConferenceController extends AbstractController{
    public function index() {

                
         
        return $this->render('conference/index.html.twig', [
            'vardas' => 'Rimas'
        ]);
    }
}