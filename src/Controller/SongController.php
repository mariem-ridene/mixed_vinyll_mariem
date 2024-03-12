<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Psr\Log\LoggerInterface;


class SongController extends AbstractController
{

    #[Route('/api/songs/{id<\d+>}', methods: ['GET'], name:'api_songs_get_one')]
    public function getSong(int $id): Response
    {
        // TODO query the database
        $songs = [
            
            1=>['name'=>'chonson1','url'=>'/music/music3.mp3'],
            2=>['name'=>'chonson2','url'=>'/music/music211.mp3'],
            3=>['name'=>'chonson3','url'=>'/music/music111.mp3'],
            4=>['name'=>'chonson4','url'=>'/music/music4.mp3'],
            5=>['name'=>'chonson6','url'=>'/music/music5.mp3'],
            6=>['name'=>'chonson7','url'=>'/music/music211.mp3'],
        ];
  
        return $this->json($songs[$id]);
    }

    
}