<?php

namespace Algoritma\Bundle\TrainingBundle\Controller;

use Symfony\Bridge\Twig\Attribute\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
class TestController extends AbstractController
{
    #[Route(path: '/', name: 'test_training')]
    #[Template('@AlgoritmaTraining/training/test.html.twig')]
    public function index()
    {
        return [];
    }
}