<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AllanController extends AbstractController
{
    /**
     * @Route("/", name="allan")
     */
    public function index()
    {
        return $this->render('allan/index.html.twig', [
            'controller_name' => 'AllanController',
        ]);
    }
}
