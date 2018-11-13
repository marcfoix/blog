<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * Match /blog/*
     * @Route("/{slug}", requirements={"slug"="^[a-z0-9]+(?:-[a-z0-9]+)*$"}, name="blog_page")
     */
 
 // déclaration slug controleur

 public function show($slug = 'Article Sans Titre')
    {
        $mypage = ucwords(str_replace('-', ' ', $slug));
        return $this->render('home/index.html.twig', ['slug' => $mypage]);
    }
     
}