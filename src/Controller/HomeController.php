<?php

namespace App\Controller;

use App\Services\Api\CoinBase\CoinUri;
use App\Services\Api\Weather\Weather;
use App\Services\Api\CoinBase\CoinUrl;
use App\Services\Api\RequestApi;
use App\Services\Api\Weather\WeatherRequest;
use App\Services\Api\Weather\WeatherUri;
use App\Services\Api\Weather\WeatherUrl;
use DateTime;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(
        RequestApi $requestApi,
        CoinUrl $coinUrl,
        WeatherUrl $weatheUrl,
        WeatherUri $weatherUri,
        CoinUri $coinUri
    ): Response {

        return $this->render('home/index.html.twig', [
            'meteo'   => $requestApi->RequestApi($weatheUrl->WeatherUrl($weatherUri)),
            'bitcoin' => $requestApi->RequestApi($coinUrl->CoinUrl($coinUri))

        ]);
    }
}
