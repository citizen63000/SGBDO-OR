<?php

namespace App\Controller;


use App\Entity\Book;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PersonController extends AbstractController
{
    #[Route('/persons', name: 'persons')]
    public function list(EntityManagerInterface $entityManager): Response
    {
        $persons = $entityManager->getRepository(Book::class)->findAll();

        return $this->render('index.html.twig', ['persons' => $persons]);
    }
}
