<?php

enum Item{
    case Pez;
    case Baya;

    public function getPlural(): string {
        return match($this){
            self::Pez=>'los Peces',
            self::Baya=>'las Bayas'
        }; 
        
    }
}