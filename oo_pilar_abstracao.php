<?php

//modelo de funcionario    
class Funcionario {
    //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;

    //getters setters
    function setNome ($nome){
        $this-> nome = $nome;
    }

    function setNumFilhos ($numFilhos){
        $this-> numFilhos = $numFilhos;
    }

    function setTelefone ($telefone){
        $this-> telefone = $telefone;
    }

    function getNome(){
        return $this->nome;
    }

    function getNumFilhos(){
        return $this->numFilhos;
    }

    function getTelefone(){
        return $this->telefone;
    }

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

$y -> setNome('Luan');
$y -> setNumFilhos(2);

// echo $y -> resumirCadFunc();

echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filhos';

$x = new Funcionario();

echo '<br>';

$x -> setNome('Ronaldo');
$x -> setNumFilhos(11);

echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filhos';


?>