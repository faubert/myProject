<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class MenuController
 * @package App\Controller
 * @Route("/menu")
 */
class MenuController extends AbstractController
{
    /**
     * @Route("/", name="menu")
     */
    public function index(): Response
    {
        return $this->render('menu/index.html.twig', [
            'controller_name' => 'MenuController',
        ]);
    }

    /**
     * @Route("/create", name="menu_create")
     */
    public function create()
    {

    }

    /**
     * @Route("/edit/{id}", name="menu_edit")
     */
    public function edit()
    {

    }

    /**
     * @Route("/delete/{id}", name="menu_delete")
     */
    public function delete()
    {

    }
}
