<?php

// https://phpunit.de/getting-started/phpunit-8.html
use PHPUnit\Framework\TestCase;
use Wead\DigitalCep\Search;//classe testada

class SearchTest extends TestCase{// Comanda todos os testes
    /**
     * @dataProvider dadosTeste 
     **/
    
    public function testGetAddressFromZipcodeDefaultUsage(string $input, array $esperado){//padrão:test+ nome função testada +DefaultUsage, mas pode ser qualquer nome
        $resultado = new Search;
        $resultado = $resultado->getAddressFromZipcode($input);

        $this->assertEquals($esperado, $resultado);
    }

    //coleção de testes

    public function dadosTeste(){
        return[
            "Primeiro Endereço"=>[
                "08121-600",
                [
                    "cep" => "08121-600", 
                    "logradouro" => "Rua Damião de Sousa Pereira",
                    "complemento" => "",
                    "bairro" => "Jardim São Luís (Zona Leste)",
                    "localidade" => "São Paulo",
                    "uf" => "SP", 
                    "ibge" => "3550308", 
                    "gia" => "1004",
                    "ddd" => "11", 
                    "siafi" => "7107"
                ]
            ],
            "Segundo Endereço"=>[
                "08121-600",
                [
                    "cep" => "08121-600", 
                    "logradouro" => "Rua Damião de Sousa Pereira",
                    "complemento" => "",
                    "bairro" => "Jardim São Luís (Zona Leste)",
                    "localidade" => "São Paulo",
                    "uf" => "SP", 
                    "ibge" => "3550308", 
                    "gia" => "1004",
                    "ddd" => "11", 
                    "siafi" => "7107"
                ]
            ]
        ];
    }
}

//NO TERMINAL PARA TESTE: vendor/bin/phpunit tests/ --colors=always