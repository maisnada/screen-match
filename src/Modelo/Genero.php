<?php

enum Genero: string{
    case Acao = 'Ação';
    case Comedia = 'Comédia';
    case Terror = 'Terror';
    case SuperHeroi = 'Super Herói';

    /**
     * @return string
     */
    public function toString(): string{

        return $this->value;
        //return $this->name;
    }
}