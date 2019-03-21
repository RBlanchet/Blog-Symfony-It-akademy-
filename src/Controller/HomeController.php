<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\ArticleRepository;

class HomeController extends AbstractController
{
    private $articleRepository;

    public function __construct(
        ArticleRepository $articleRepository
    )
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        // Recupération des articles
        $articles = $this->articleRepository->findAll();

        return $this->render('home/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}
