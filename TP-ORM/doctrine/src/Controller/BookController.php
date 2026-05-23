<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BookController extends AbstractController
{
    #[Route('/')]
    public function list(): Response
    {

        $list = [['name' => 'test']];

        return $this->render('index.html.twig', ['list' => $list]);

//
//        $number = random_int(0, 100);
//
//        return new Response('<html><body>Lucky number: '.$number.'</body></html>');

    }
}
