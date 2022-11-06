<?php

namespace App\Controller;

use phpDocumentor\Reflection\Types\This;
use PhpParser\Node\Expr\List_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Config\Framework\SerializerConfig;

//#[Route('/blog', name: 'blog_', requirements: ['_locale' => 'en|es|fr'])]
class ConferenceController extends AbstractController
{

    #[Route('/username/{username}', name: 'homepage')]
    public final function index(string $username = ""): Response
    {
        return new Response(
            $username ?
                sprintf('<h1>Hello %s!</h1> <a href="allProducts">All products </a>', htmlspecialchars($username))
                : 'Empty Body!');

    }

}
