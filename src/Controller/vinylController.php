<?php
namespace App\Controller;

use function Symfony\Component\String\u;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class vinylController{
    #[Route("/page1")]
    function homepage():Response{
        die("bonjour <strong>DSI22!</strong>");

    }
    #[Route("/browse/{slug}")]
    function browse(string $slug=null):Response{
        if($slug){
        $title="Genre:" . u(str_replace("-"," ",$slug))->title(true);
        }else{
            $title="All Genre";
        }
        return new Response ($title);
    }

}
