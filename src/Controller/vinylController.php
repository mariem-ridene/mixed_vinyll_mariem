<?php
namespace App\Controller;

use function Symfony\Component\String\u;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class vinylController extends AbstractController{
    #[Route("/page1")]
    function homepage():Response{

        $tracks = [
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'Waterfalls', 'artist' => 'TLC'],
            ['song' => 'Creep', 'artist' => 'Radiohead'],
            ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
            ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
            ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
        ];

        return $this->render('vinyl/homepage.html.twig',[
            'title'=>'Iset Kelibia',
            'tracks' => $tracks,
        ]);

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
