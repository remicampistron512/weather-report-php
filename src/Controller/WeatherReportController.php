<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class WeatherReportController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('weather_report/index.html.twig', [
            'message' => 'Weather report controller ready',
        ]);
    }
}
