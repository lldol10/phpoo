<?php

class Pai {
    private $nome = 'Luan';
    protected $sobrenome = 'Lucas';
    public $humor = 'Feliz';


    public function getNome (){
        return $this-> nome;
    }

    public function setNome($valor){
        if(strlen($valor) >= 3){
            $this-> nome = $valor;
        }else{
            echo 'nome muito curto';
        }

    }

}

$pai = new Pai();

/*
echo $pai-> humor;
$pai -> humor = 'Triste';
echo '<br>';
echo $pai-> humor;
*/

echo $pai-> getNome();

$pai-> setNome('pi');
echo '<br />';
echo $pai-> getNome();


?>