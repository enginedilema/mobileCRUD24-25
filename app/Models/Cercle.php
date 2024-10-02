<?php
class Cercle extends Forma{
    public int $radius;

    public function __construct(int $positionX, int $positionY, int $radius){
        parent::__construct($positionX, $positionY);
        $this->radius = $radius;
    }

    public function area() : int{
        return 3.14 * $this->radius * $this->radius;
    }
}