<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiPostController extends AbstractController
{
    /**
     * Route qui va renvoyer en JSON la liste de TOUS les POSTS
     * 
     * @Route(
     *  "/api/post", 
     *  name="api_post",
     *  methods={"GET"}
     * )
     */
    public function index(PostRepository $postRepository): Response
    {
        // 1. Récupération de tous les POSTS
        $posts = $postRepository->findAll();


        // Méthode de sérialisation brutale
        // json_encode permet de transformer un tableau ou un objet en JSON
        $json = json_encode($posts);
        dd($json, $posts);

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ApiPostController.php',
        ]);
    }
}
