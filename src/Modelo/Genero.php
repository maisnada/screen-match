<?php

enum Genero: string{
    case Acao = 'A��o';
    case Comedia = 'Com�dia';
    case Terror = 'Terror';
    case SuperHeroi = 'Super Heroi';

    /**
     * @return string
     */
    public function toString(): string{

        return $this->value;
        //return $this->name;
    }
}