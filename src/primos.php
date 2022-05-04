<?php

    function isPrimo(int $valor): bool {
        for ($i = 2; $i < $valor; ++$i) {
            if ($valor % $i == 0) {
                return false;
            }
        }

        return true;
    }

    function rangePrimos(int $inicio, int $fim): array {
        $primos = [];

        if ($inicio < 0 || $fim > $inicio) {
            return $primos;
        }

        for ($i = $inicio + 1; $i < $fim; $i++) {
            if (isPrimo($i)) {
                $primos[] = $i;
            }
        }

        return $primos;
    }

    function printPrimos(array $primos): void {
        $printed = 'Array [';
        foreach ($primos as $primo) {
            $printed .= "$primo,";
        }

        $printed = rtrim($printed, ',');
        $printed .= ']';
        echo($printed);
    }

    //Apenas valores primos
    //início deverá ser um número inteiro maior ou igual a 0 e fim um número inteiro maior que início
    $primos = rangePrimos(-1, 100);

    printPrimos($primos);
    //print_r($primos);

