<?php

namespace App\Services\Api\CoinBase;

class CoinUrl
{

    public function CoinUrl(CoinUri $coinUri): String
    {

        return "https://rest.coinapi.io/" . $coinUri->CoinUri();
    }
}
