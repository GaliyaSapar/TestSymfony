<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     *
     *
     *
     *
     *
     *
     * * @Route("/blog/{page<\d+>?1}", name="blog_list")
     */
    public function list(int $page = 1)
    {

    }

    /**
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show($post)
    {
        return $this->render('lucky/number.html.twig', [
            'number' => $post,
        ]);

    }
}