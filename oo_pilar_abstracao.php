<?php

//modelo de funcionario    
class Funcionario {
    //atributos
    public $nome = 'Jose';
    public $telefone = '464687546';
    public $numFilhos = 2;

    //métodos
    function resumirCadFunc (){
        return "$this->nome possui $this->numFilhos filhos(s)";
    }

    function modificarNumFilhos ($numFilhos) {
        //afetar o atributo do objeto
        $this->numFilhos = $numFilhos;
    }
}

$y = new Funcionario();

echo $y->resumirCadFunc();
echo '<br>';
$y-> modificarNumFilhos(3);
echo $y->resumirCadFunc();

echo '<hr>';

$x = new Funcionario();

echo $x -> resumirCadFunc();
echo '<br>';
$x-> modificarNumFilhos(7);

echo $x -> resumirCadFunc();





?>