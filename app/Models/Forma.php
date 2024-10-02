<?php

class Forma{
    public int $positionX;
    public int $positionY;

    public function __construct(int $positionX, int $positionY){
        $this->positionX = $positionX;
        $this->positionY = $positionY;


    }
    public function area() : int{
        return 0;
    }


}