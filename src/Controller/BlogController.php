<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog/{page}", name="blog_list", methods={"GET", "HEAD"} requirements={"page"="\d+"})
     *
     *
     * * @Route("/blog/{page<\d+>}", name="blog_list")
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
    public function show(BlogPost $post)
    {
        return $this->render('lucky/number.html.twig', [
            'number' => $post,
        ]);

    }
}