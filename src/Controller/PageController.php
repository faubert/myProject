<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PageController
 * @package App\Controller
 * @Route("/page")
 */
class PageController extends AbstractController
{
    /**
     * @Route("/", name="page")
     */
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/page/create", name="page_create")
     */
    public function create()
    {

    }

    /**
     * @Route("/edit/{id}", name="page_edit")
     */
    public function edit()
    {

    }

    /**
     * @Route("/delete/{id}", name="page_delete")
     */
    public function delete()
    {

    }
}
