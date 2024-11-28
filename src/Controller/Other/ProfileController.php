<?php

namespace App\Controller\Other;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

#[Route("/profile")]
class ProfileController extends AbstractController{

    #[Route(path: "/profile", name: "profile")]
    public function subscriptions(){
        return $this->render("other/profile.html.twig");
    }
}
