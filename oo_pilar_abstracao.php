<?php

//modelo de funcionario    
class Funcionario {
    //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    //getters setters overloading / sobrecarga

    function __set ($atributo, $valor){
        $this -> $atributo = $valor;
    }

    function __get ($atributo){
        return $this -> $atributo;
    }
    /*
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
    }*/

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

$y -> __set('nome','Luan');
$y -> __set('numFilhos',2);
$y -> __set('telefone','78990987');
$y -> __set('cargo','aux escritorio');

// echo $y -> resumirCadFunc();

// echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filhos, e seu telefone é ->' . $y -> __get('telefone') . 'possui o cargo de ' . $y -> __get('cargo');

$x = new Funcionario();

echo '<br>';

$x = new Funcionario();
$x -> __set('nome', 'Ramom');
$x -> __set('numFilhos', 4);


echo $x -> resumirCadFunc();


?>