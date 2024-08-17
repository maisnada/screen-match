<?php

class Titulo{

    
    private string $nome;
    private  int $anoLancamento;
    private Genero $genero;
    private array $notas;
    private static float $notaMinima = 7.5;

    /**
     * @param string $nome
     * @param int $anoLancamento
     * @param Genero $genero
     */
    public function __construct(string $nome, int $anoLancamento, Genero $genero){

        $this->nome = $nome;
        $this->anoLancamento = $anoLancamento;
        $this->genero = $genero;
        $this->notas = [];
    }

    /**
     * @param float $nota
     * 
     * @return void
     */
    public function avalia(float $nota):void{

        $this->notas[] = $nota;
    }

    /**
     * @return float
     */
    public function media():float{

        if(array_sum($this->notas) > 0){
            
            $total = array_sum($this->notas);
            
            $quantidadeNotas = count($this->notas);
            
            return $total / $quantidadeNotas;
        }

        return 0;
    }

    /**
     * @return string
     */
    public function bom(): string
    {
        return $this->media() >= self::$notaMinima ? 'Sim' : 'Não';
    }

    /**
     * @return string
     */
    public function getNome():string{

        return $this->nome;
    }

    /**
     * @return int
     */
    public function getAnoLancamento():int{

        return $this->anoLancamento;
    }

    /**
     * @return Genero
     */
    public function getGenero():Genero{

        return $this->genero;
    }
    
    public function duracaoEmMinutos():int{

        return 0;
    }

    /**
     * @return string
     */
    public function __tostring():string{

        return 
            "Nome: ". $this->getNome().
            " - Ano: ".$this->getAnoLancamento().
            " - Gênero: ".$this->getGenero()->toString().
            " - Média: ".$this->media().
            " - Recomenda? ".$this->bom();
    }
}