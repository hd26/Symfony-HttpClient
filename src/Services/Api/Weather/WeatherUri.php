<?php

namespace App\Services\Api\Weather;

use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;


class WeatherUri
{


    public function __construct(ContainerBagInterface $getParams)
    {
        $this->getParams = $getParams;
    }


    public function WeatherUri(string $lat, string $lon): String
    {
        return
            $this->WeatherVersion() .
            $this->WeatherQuery() .
            $this->WeatherLatLon($lat, $lon) .
            $this->WeatherMetric() .
            $this->WeatherApiKey() .
            $this->Lang();
    }



    public function WeatherVersion(): String
    {
        return "2.5/";
    }

    public function WeatherQuery()
    {
        return "weather?";
    }

    public function WeatherLatLon(string $lat, string $lon): String
    {
        return "lat=" . $lat . "&lon=" . $lon;
    }

    public function Lang()
    {
        return "&lang=fr";
    }


    public function WeatherMetric(): String
    {
        return "&units=metric";
    }

    public function WeatherApiKey(): String
    {
        return "&appid=" . $this->getParams->get('WEATHER_KEY');
    }
}
