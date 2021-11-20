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
}

$carro = new Carro('ABC1234', 'branca');
$moto = new Moto('AFG3466', 'preta');

echo '<pre>';
print_r($carro);
echo '<br />';
print_r($moto);
echo '</pre>';

echo '<hr>';

echo $carro -> acelerar();


?>