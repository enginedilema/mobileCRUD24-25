<?php

class Rectancle extends Forma{
    public int $width;
    public int $height;

    public function __construct(int $positionX, int $positionY, int $width, int $height){
        parent::__construct($positionX, $positionY);
        $this->width = $width;
        $this->height = $height;
    }

    public function area() : int{
        return $this->width * $this->height;
    }
}