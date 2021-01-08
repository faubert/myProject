<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class MenuItemController
 * @package App\Controller
 * @Route("/menuitem")
 */
class MenuItemController extends AbstractController
{
    /**
     * @Route("/menu/item", name="menu_item")
     */
    public function index(): Response
    {
        return $this->render('menu_item/index.html.twig', [
            'controller_name' => 'MenuItemController',
        ]);
    }
}
