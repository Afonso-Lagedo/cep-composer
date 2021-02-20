<?php

namespace Wead\DigitalCep;

class Search{
    private $url = "http://viacep.com.br/ws/";

    public function getAddressFromZipcode (string $zipCode): array{
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);//Eliminando o que não for número
        
        $get = file_get_contents($this->url . $zipCode . "/json");

        return (array) json_decode($get);
    }
}