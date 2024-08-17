<?php

class Serie extends Titulo{

    private int $temporadas;
    private int $epsodiosPorTemporada;
    private int $minutosPorEpsodio;

    /**
     * @param string $nome
     * @param int $anoLancamento
     * @param Genero $genero
     * @param int $temporadas
     * @param int $epsodiosPorTemporada
     * @param int $minutosPorEpsodio
     */
    public function __construct(string $nome, int $anoLancamento, Genero $genero, int $temporadas, int $epsodiosPorTemporada, int $minutosPorEpsodio){

        parent::__construct($nome, $anoLancamento, $genero);
        
        $this->temporadas = $temporadas;
        $this->epsodiosPorTemporada = $epsodiosPorTemporada;
        $this->minutosPorEpsodio = $minutosPorEpsodio;
    }

    /**
     * @return int
     */
    public function getTemporadas():int{

        return $this->temporadas;
    }

    /**
     * @return int
     */
    public function getEpsodiosPorTemporada(): int{

        return $this->epsodiosPorTemporada;
    }

    /**
     * @return int
     */
    public function getMinutosPorEpsodio(): int{

        return $this->minutosPorEpsodio;
    }

    public function duracaoEmMinutos():int{

        return $this->temporadas * $this->epsodiosPorTemporada * $this->minutosPorEpsodio;
    }

    /**
     * @return string
     */
    public function __tostring():string{

        return parent::__tostring() . " - Temporadas: " . $this->getTemporadas()." - Ep. por temp: " . $this->getEpsodiosPorTemporada()." - Minutos por Ep.:" . $this->getMinutosPorEpsodio();
    }
    
    
}