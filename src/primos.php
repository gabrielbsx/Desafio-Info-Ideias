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

    //Apenas valores primos
    $primos = rangePrimos(1, 100);
    print_r($primos);