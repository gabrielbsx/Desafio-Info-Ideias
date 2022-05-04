<?php

    function naoRepetidos(array $sorteados): array {
        $naoRepetidos = [];
        
        //pegar apenas números que não se repitem
        foreach ($sorteados as $sorteio) {
            $quantidade = 0;

            //quantidade de vezes que o número $sorteio aparece no array
            foreach ($sorteados as $sorteio2) {
                if ($sorteio == $sorteio2) {
                    $quantidade++;
                }
            }

            //se o número não apareceu mais de uma vez
            if ($quantidade == 1) {
                $naoRepetidos[] = $sorteio;
            }
        }

        return $naoRepetidos;
    }

    function sorteio(): array {
        $sorteados = [];

        for ($i = 0; $i < 20; $i++) {
            $sorteados[] = rand(1, 10);
        }

        //Teste repetidos
        //$sorteados = [2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1];
        //No teste proposto do desáfio é dito que o número 9 se repete, porém ele não se repete.

        return naoRepetidos($sorteados);
    }

    function printSorteio(array $sorteio): void {
        if (count($sorteio) > 2) {
            $sorteio = implode(', ', $sorteio);
            echo("Os números que não se repetem são o $sorteio\n");
        } else {
            $sorteio = implode(' e ', $sorteio);
            echo("Os números que não se repetem são o $sorteio\n");
        }
    }

    printSorteio(sorteio());