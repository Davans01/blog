<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

use App\Entity\Blog;
use App\Form\BlogType;
use App\Repository\BlogRepository;
use App\Controller\BlogController;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(BlogRepository $blogRepository): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'blogs' => $blogRepository->findAll(),
        ]);
    }
}
