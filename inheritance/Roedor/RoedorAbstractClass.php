<?php
namespace Roedor;

abstract class RoedorAbstractClass
{

    abstract protected function correr();

    abstract protected function getNumberAlas();

    public function puedeVolar()
    {
        return $this->getNumberAlas() > 0;
    }

}
