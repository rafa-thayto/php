<?php

    class Pessoa {

        // Atributos
        public $nome;

        public function falar() {
            // $this->Alguma coisa, é a forma de chamar o objeto
            return "O meu nome é " . $this->nome;

        }

    }

    $p1 = new Pessoa();
    // Para acessar algum atributo em php, você utiliza a seta ->
    // ao invés de .
    $p1->nome = "Rafael Thayto";
    echo $p1->falar();

?>