<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogStPaulController extends AbstractController
{
    /**
     * @Route("/blogstpaul", name="blogstpaul")
     */
    public function index()
    {
        return $this->render('blogstpaul/index.html.twig', [
            'controller_name' => 'BlogStPaulController',
        ]);
    }

}
