<?php
namespace Roedor;

class RoedorClass extends RoedorAbstractClass implements GeneroInterface
{
    const ALAS = 0;
    const PATAS = 0;

    public function correr()
    {
        return sprintf("Corre en %d patas", static::PATAS);
    }

    public function getNumberAlas()
    {
        return static::ALAS;
    }

    public function getGenero()
    {
        return sprintf("Genero %s", __CLASS__);
    }
}
