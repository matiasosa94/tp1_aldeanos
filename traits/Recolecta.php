<?php

trait Recolecta{

    public function recolectar(Recolectable $recolectable){ 


        if(in_array($recolectable->getTipo(),$this->item) ){
            echo "Tarde ". ceil($recolectable->getAlimento()/$this->getVelocidadRecoleccion())." minutos en recolectar ".$recolectable->getTipo()->getPlural()."<br>"; 
            $this->recoleccion = $recolectable->getAlimento();
        } else {
            echo "No puedo recolectar ". $recolectable->getTipo()->getPlural()."<br>";
        }

        
    }
}