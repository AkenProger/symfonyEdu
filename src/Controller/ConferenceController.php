<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{

    #[Route('/hello/{username}', name: 'homepage')]
    public final function index(string $username = ""): Response
    {
        return new Response(
            $username ?
                sprintf('<h1>Hello %s!</h1> <a href="/allProducts">All products</a>', htmlspecialchars($username))
                : 'Empty Body!');

    }

    #[Route('/allProducts', name: 'allProduct')]
    public final function getAllProducts(): Response
    {
        return new Response('<h1>Product List</h1>');
    }


}
