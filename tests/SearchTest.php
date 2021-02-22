<?php

// https://phpunit.de/getting-started/phpunit-8.html
use PHPUnit\Framework\TestCase;
use Wead\DigitalCep\Search;//classe testada

class SearchTest extends TestCase{// Comanda todos os testes
    public function testGetAddressFromZipcodeDefaultUsage(){//padrão:test+ nome função testada +DefaultUsage, mas pode ser qualquer nome
        $resultado = "ok";

        $this->assertEquals("ok", $resultado);
    }
}

//NO TERMINAL PARA TESTE: vendor/bin/phpunit tests/ --colors=always