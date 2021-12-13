<?php

namespace App\Services\Api\CoinBase;

use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;


class CoinUri
{


    public function __construct(ContainerBagInterface $getParams)
    {
        $this->getParams = $getParams;
    }

    public function CoinUri(): String
    {
        return
            $this->CoinVersion() .
            $this->CoinQuery() .
            $this->CoinDevise() .
            $this->CoinApiKey();
    }

    private function CoinVersion(string $version = 'v1/'): String
    {
        return $version;
    }

    private function CoinQuery()
    {
        return  "exchangerate/";
    }

    private function CoinDevise(string $crypto = 'BTC', string $devise = 'USD'): String
    {
        return $crypto . "/" . $devise;
    }

    private function CoinApiKey()
    {
        return "?apikey=" . $this->getParams->get('COIN_KEY');
    }
}
