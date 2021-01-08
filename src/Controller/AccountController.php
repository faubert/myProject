<?php

namespace App\Controller;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class AccountController
 * @package App\Controller
 * @Route("/account")
 */
class AccountController extends AbstractController
{
    /**
     * @var EntityManagerInterface $entityManager
     */
    protected $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/", name="account")
     */
    public function index(): Response
    {
        return $this->render('account/index.html.twig', [
            'controller_name' => 'AccountController',
        ]);
    }

    /**
     * @Route("/add", name="add_account")
     */
    public function add()
    {

    }

    /**
     * @Route("/edit/{id}", name="edit_account")
     */
    public function edit()
    {

    }

    /**
     * @Route("/update", name="update_account")
     */
    public function update()
    {

    }

    /**
     * @Route("/delete/{id}", name="delete_account")
     */
    public function delete()
    {

    }

    public function confirmDelete()
    {

    }
}
