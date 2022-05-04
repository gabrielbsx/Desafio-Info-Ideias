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

        for ($i = $inicio; $i <= $fim; $i++) {
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
    $primos = rangePrimos(1, 100);

    printPrimos($primos);
    
    //print_r($primos);

