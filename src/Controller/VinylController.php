<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController
{
    #[Route('/x')]
    public  function  homepage():Response{


        return new Response('Title: "PB and Jams"');
    }

}
