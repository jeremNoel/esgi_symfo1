<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ArticleController
 * @package App\Controller
 * @Route(name="app_article_", path="articles")
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(ArticleRepository $articleRepository)
    {
        $articles = $articleRepository->findAll();
        return $this->render('article/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * @Route(path="/{id}", name="show")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function show(Article $article)
    {
        return $this->render('article/show.html.twig', [
            'article' => $article
        ]);
    }

    public function new(Request $request)
    {

    }
}
