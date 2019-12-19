<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\SimulationType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Simul;

class BlogStPaulController extends AbstractController
{
    
    /**
     * @Route ("/blogstpaul/simul", name="simul")
     */
    public function simulation(Request $request)
    {
        dump($request);
        return $this->render('blogstpaul/simul.html.twig');
    }
    
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
