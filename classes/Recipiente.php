<?php

abstract class Recipiente implements Recolectable{

    use Recogido;
    private int $cantidadUnidades;
    private Item $item;
    
    public function __construct(int $unidades, Item $item) {
        $this->setUnidades($unidades);
        $this->setItem($item);
    }

    public function getUnidades(){
        return $this->cantidadUnidades;
    }

    private function setUnidades(int $unidades){
        $this->cantidadUnidades=$unidades;
    }

    public function getItem(){
        return $this->item;
    }

    private function setItem(Item $item){
        $this->item=$item;
    }

    
    
} 