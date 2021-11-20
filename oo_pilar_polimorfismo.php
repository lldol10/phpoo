<?php

class Carro extends Veiculo {
    public $teto_solar = true;


    function __construct($placa, $cor){

        $this -> placa = $placa;
        $this -> cor = $cor;
    }

    function abrirTetoSolar(){
        echo 'abrir teto solar';
    }

    function alterarPosicaoVolante(){
        echo 'alterar posicao volante';
    }
}

class Veiculo{
    public $placa;
    public $cor;

    function acelerar(){
        echo 'acelerando';
    }

    function trocarMarcha(){
        echo 'desengatar embreagem com o pé e engatar marcha com a mão';
    }
}


class Moto extends Veiculo {

    public $contraPesoGuidao = true;

    function __construct($placa, $cor){
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function empinar(){
        echo 'empinar';
    }

    function trocarMarcha()
    {
        echo 'desengatar embreagem com a mão e trocar a marcha com o pé';
    }
}

$carro = new Carro('ABC1234', 'branca');
$moto = new Moto('AFG3466', 'preta');

echo $carro -> trocarMarcha();
echo '<br>';
echo $moto -> trocarMarcha();



?>