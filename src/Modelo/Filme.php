<?php

class Filme extends Titulo{

    private int $duracaoEmMinutos;

    /**
     * @param string $nome
     * @param int $anoLancamento
     * @param Genero $genero
     * @param int $duracaoEmMinutos
     */
    public function __construct(string $nome, int $anoLancamento, Genero $genero, int $duracaoEmMinutos){
       
        parent::__construct($nome, $anoLancamento, $genero);

        $this->duracaoEmMinutos = $duracaoEmMinutos;
    }

    public function duracaoEmMinutos():int{

        return $this->duracaoEmMinutos;
    }
    
    /**
     * @return string
     */
    public function __tostring():string{

        return parent::__tostring() . " - Duração (min.): " . $this->duracaoEmMinutos();
    }
    
}