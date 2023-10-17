<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    #[Route('/')]
    public function index():Response
    {
       return $this->render('pages/index.html.twig',[
           'nomeCompleto' => 'Pedro Italo da Silva Hermes',
           'idade' => '25',
           'sexo' => 'Gosto'
       ]);
    }
}