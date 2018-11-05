<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route(name="app_default_index", path="/")
     * @return Response
     */
    public function index()
    {
        return $this->render('Default/index.html.twig', ['name' => 'toto']);
    }

    /**
     * @Route(name="app_default_saymyname", path="/{name}", methods={"GET"})
     * @param $name
     * @return Response
     */
    public function sayMyName($name)
    {
        return $this->render('Default/show.html.twig', ['name' => $name]);
    }
}
