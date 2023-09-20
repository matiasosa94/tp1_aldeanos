<?php

trait Recogido{

    public function getAlimento():int{
        $unidades=$this->getUnidades();
        $this->cantidadUnidades=0;
        return $unidades; 
    }

    public function getTipo():Item{
        return $this->getItem();
    }
    
}