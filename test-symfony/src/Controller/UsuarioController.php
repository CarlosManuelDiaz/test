<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Usuario;

class UsuarioController extends AbstractController
{
    public function index()
    {
        $usuarios_repo = $this->getDoctrine()->getRepository(Usuario::class);

        $usuarios = $usuarios_repo->findAll();

        return $this->render('usuario/index.html.twig', [
            'controller_name' => 'UsuarioController',
            'usuarios' => $usuarios
        ]);
    }
}
