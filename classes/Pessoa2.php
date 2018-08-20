<?php
class Pessoa2 
{
    private $data;

    public function __get($prop)
    {
        return $this->data['$prop'];
    }

    public function __set($prop, $valor)
    {
        $this->data['$prop'] = $valor;
    }

}
