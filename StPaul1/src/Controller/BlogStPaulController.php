<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogStPaulController extends AbstractController
{
    /**
     * @Route("/blog/st/paul", name="blog_st_paul")
     */
    public function index()
    {
        return $this->render('blogstpaul/index.html.twig', [
            'controller_name' => 'BlogStPaulController',
        ]);
    }
    
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('blogstpaul/home.html.twig', [
            'controller_name' => 'BlogStPaulController',
        ]);
    }
    
}
