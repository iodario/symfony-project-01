<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="inicio")
     */
    public function inicio()
    {
        $datos = [
            [
                'id' => 1,
                'nombre' => 'Juan',
                'edad' => 26
            ],
            [
                'id' => 1,
                'nombre' => 'Luis',
                'edad' => 31
            ],
            [
                'id' => 3,
                'nombre' => 'Carla',
                'edad' => 28
            ],
            [
                'id' => 1,
                'nombre' => 'Laura',
                'edad' => 35
            ],
        ];

        return $this->render('home/index.html.twig', [
            'nombre' => 'Juan',
            'alumnos' => $datos,
        ]);
    }

    /**
     * @Route("/cliente/{nombre}/{edad}", name="cliente")
     */
    public function cliente($nombre = "sin nombre", $edad = 0)
    {
        print_r('su nombre es ' . $nombre . ', tiene ' . $edad . ' anios.');
        exit();

        // return $this->render('home/index.html.twig', [
        //     'controller_name' => 'HomeController',
        // ]);
    }
}
