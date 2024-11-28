<?php

namespace App\Controller\Movie;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\PlaylistRepository;

#[Route("/movie")]
class MovieController extends AbstractController {
    #[Route(path: "/discover", name: "discover")]
    public function discover(): Response {
        return $this->render("movie/discover.html.twig");
    }

    #[Route(path: "/lists", name: "lists")]
    public function lists(PlaylistRepository $playlistRepository): Response {
        $playlists = $playlistRepository->findAll();
        return $this->render("movie/lists.html.twig", [
            "playlists" => $playlists
        ]);
    }

    #[Route(path: "/detail", name: "detail")]
    public function detail(): Response {
        return $this->render("movie/detail.html.twig");
    }

    #[Route(path: "/detail_serie", name: "detail_serie")]
    public function detail_serie(): Response {
        return $this->render("movie/detail_serie.html.twig");
    }

    #[Route(path: "/category", name: "category")]
    public function category(): Response {
        return $this->render("movie/category.html.twig");
    }
}
