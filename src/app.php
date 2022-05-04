<?php
    //função recebe um ano e converte para o século
    function seculoAno(int $ano): string {
        //números romanos
        $numerosRomano = [
            'M' => 1000,
            'D' => 500,
            'C' => 100,
            'L' => 50,
            'X' => 10,
            'V' => 5,
            'I' => 1,
        ];

        //essa data não existe
        if ($ano < 1) {
            return 'Data inválida';
        }

        //example: seculo XX   
        $seculo = (int) $ano / 100; //pega o primeiro digito do ano
        $seculo = ceil($seculo); //aredondar para cima
        $seculoRomano = ''; //séc

        //importante frisar que o século tem que ser maior que 0
        while ($seculo > 0) {
            //pegar os números romanos
            foreach ($numerosRomano as $chave => $valor) {
                //se o valor do século romano for menor ou igual ao seculo
                if ($valor <= $seculo) {
                    //retiro o valor equivalente do século
                    $seculo -= $valor;

                    //adiciono o número romano equivalente ao século à variável séculoRomano
                    $seculoRomano .= $chave;

                    //próximo número romano
                    break;
                }
            }
            
        }
        
        return "século $seculoRomano";
    }

    //entradas
    $entradas = ['Ano 1905', 'Ano 1700'];

    foreach ($entradas as $entrada) {
        $data = (int) explode(' ', $entrada)[1];
        echo "$entrada = " . seculoAno($data) . "\n";
    }
