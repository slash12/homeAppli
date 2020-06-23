<?php

namespace App\Controller;

use App\Entity\TemperatureImport;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class TemperatureController extends AbstractController
{
    /**
     * @Route(
     *     name="temperature_import",
     *     path="/temperature/import",
     *     methods={"POST"},
     * )
     */
    public function index()
    {

    }
}
