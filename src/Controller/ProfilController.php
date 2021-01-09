<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ProfilController
 * @package App\Controller
 * @Route("/profil")
 */
class ProfilController extends AbstractController
{
    /**
     * @Route("/", name="profil")
     */
    public function index(): Response
    {
        return $this->render('profil/index.html.twig', [
            'controller_name' => 'ProfilController',
        ]);
    }

    /**
     * @Route("/create", name="profil_create")
     */
    public function create()
    {

    }

    /**
     * @Route("/edit/{id}", name="profil_edit")
     */
    public function edit()
    {

    }

    /**
     * @Route("/delete/{id}", name="profil_delete")
     */
    public function delete()
    {

    }
}
