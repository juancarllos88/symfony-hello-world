<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/aula")
 * Class AulaControler
 * @package App\Controller
 */
class AulaController extends AbstractController {

    /**
     * @Route("/teste/{nome}")
     */
    public function helloWorld(string $nome): Response {
        return new Response('Bem vindo: ' .$nome);
    }

}