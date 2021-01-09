<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class SkillController
 * @package App\Controller
 * @Route("/skill")
 */
class SkillController extends AbstractController
{
    /**
     * @Route("/", name="skill")
     */
    public function index(): Response
    {
        return $this->render('skill/index.html.twig', [
            'controller_name' => 'SkillController',
        ]);
    }

    /**
     * @Route("/skill/add", name="skill_create")
     */
    public function create()
    {

    }

    /**
     * @param $id
     * @Route("/edit/{id}", name="skill_edit")
     */
    public function edit($id)
    {

    }

    /**
     * @Route("/delete/{id}", name="skill_delete")
     */
    public function delete()
    {

    }
}
