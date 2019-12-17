<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogStPaulController extends AbstractController
{
    /**
     * @Route("/blogstpaul", name="blog_st_paul")
     */
    public function index()
    {
        return $this->render('blog_st_paul/index.html.twig', [
            'controller_name' => 'BlogStPaulController',
        ]);
    }
    
    /**
     * @Route("/", name="blog_st_paul/home")
     */
    public function home()
    {
        return $this->render('blog_st_paul/home.html.twig');
    }
}
