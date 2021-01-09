<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class MessageController
 * @package App\Controller
 * @Route("/message")
 */
class MessageController extends AbstractController
{
    /**
     * @Route("/", name="message")
     */
    public function index(): Response
    {
        return $this->render('message/index.html.twig', [
            'controller_name' => 'MessageController',
        ]);
    }

    /**
     * @Route("/create", name="message_create")
     */
    public function create()
    {

    }

    /**
     * @Route("/edit/{id}", name="message_edit")
     */
    public function edit()
    {

    }

    /**
     * @Route("/delete/{id}", name="message_delete")
     */
    public function delete()
    {

    }
}
