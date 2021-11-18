<?php

class Pessoa {
    public $nome = null;




    function __construct($nome){
        $this -> nome = $nome;
    }

    function __destruct (){
        echo 'objeto removido';
    }

    function __get($atributo){
        return $this -> $atributo;
    }

    function correr(){
        return $this-> __get('nome') . ' está correndo';
        }

}

$pessoa = new Pessoa('Luan');
echo '<br />Nome: ' . $pessoa -> __get('nome');
echo '<br />' . $pessoa -> correr();

echo '<br />';
unset($pessoa);

echo $pessoa -> __get('nome');

?>