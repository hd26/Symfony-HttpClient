<?php

namespace App\Services\Api\Weather;

class WeatherUrl
{

    public function WeatherUrl(WeatherUri $uri): String
    {
        return "https://api.openweathermap.org/data/" . $uri->WeatherUri("44.9380352", "4.9086464");
    }
}
