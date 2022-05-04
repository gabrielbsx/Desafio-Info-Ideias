<?php

    function isCrescente(array $valores): bool {
        $crescente = false;

        //verificar se os valores são crescentes
        for ($i = 0; $i < count($valores) - 1; $i++) {
            if ($valores[$i] < $valores[$i + 1]) {
                $crescente = true;
            } else {
                $crescente = false;
                break;
            }
        }
        
        if (count($valores) == 1) {
            $crescente = true;
        }

        return $crescente;
    }

    function sequenciaCrescente(array $numeros): bool {
        $isCrescente = false;
        $beforeNumeros = $numeros;

        for ($i = 0; $i < count($numeros) - 1; $i++) {
            if (($numeros[$i] >= $numeros[$i + 1])) {
                //remover o elemento da lista
                array_splice($numeros, $i, 1);
                break;
            }
        }

        if (isCrescente($numeros)) {
            printResultados($beforeNumeros, true);
            return true;
        }

        $numeros = $beforeNumeros;

        for ($i = count($numeros) - 1; $i >= 0; $i--) {
            if ($numeros[$i] <= $numeros[$i - 1]) {
                //remover o elemento da lista
                array_splice($numeros, $i, 1);
                break;
            }
        }

        if (isCrescente($numeros)) {
            printResultados($beforeNumeros, true);
            return true;
        }

        printResultados($beforeNumeros, false);

        return $isCrescente;
    }

    function printResultados(array $numeros, bool $crescente): void {
        echo("[" . implode(', ', $numeros) . "] " . ($crescente ? 'true' : 'false') . "\n");
    }

    sequenciaCrescente([1, 3, 2, 1]);
    sequenciaCrescente([1, 3, 2]);
    sequenciaCrescente([1, 2, 1, 2]);
    sequenciaCrescente([3, 6, 5, 8, 10, 20, 15]);
    sequenciaCrescente([1, 1, 2, 3, 4, 4]);
    sequenciaCrescente([1, 4, 10, 4, 2]);
    sequenciaCrescente([10, 1, 2, 3, 4, 5]);
    sequenciaCrescente([1, 1, 1, 2, 3]);
    sequenciaCrescente([0, -2, 5, 6]);
    sequenciaCrescente([1, 2, 3, 4, 5, 3, 5, 6]);
    sequenciaCrescente([40, 50, 60, 10, 20, 30]);
    sequenciaCrescente([1, 1]);
    sequenciaCrescente([1, 2, 5, 3, 5]);
    sequenciaCrescente([1, 2, 5, 5, 5]);
    sequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1]);
    sequenciaCrescente([1, 2, 3, 4, 3, 6]);
    sequenciaCrescente([1, 2, 3, 4, 99, 5, 6]);
    sequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45]);
    sequenciaCrescente([3, 5, 67, 98, 3]);