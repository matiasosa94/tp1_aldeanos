<?php

abstract class Unidad implements Recolectar {
    use recolecta;
    private $velocidadRecoleccion;
    private $recoleccion;
    private $plusVelocidad;
    private $item=[];

    public function __construct(int $velocidad, Item $item,int $plus) {
        $this->velocidadRecoleccion = $velocidad;
        $this->recoleccion = 0;
        $this->setItem($item);
        $this->setPlusVelocidad($plus);

    }

    protected function setItem(Item $item){
        array_push($this->item,$item);
    }

    public function getItem(int $indice){
        return $this->item[$indice];
    }

    public function getItems(){
        return $this->item;
    }

    private function setPlusVelocidad($plusVelocidad){
        $this->plusVelocidad=$plusVelocidad;
    }

    public function getVelocidadRecoleccion(){
        if($this->plusVelocidad==0){
            return $this->velocidadRecoleccion;
        } else {
            return ceil($this->velocidadRecoleccion *(0.01*$this->plusVelocidad+1));
        }
    }
}