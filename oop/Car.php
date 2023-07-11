<?php

class Car
{
    public $width;
    public $height;
    public $length;
    public $color;
    protected $model;
    private $current_speed;
    public $fule;

    public function __construct($width, $height, $current_speed = 0, $color = 'red')
    {
        $this->color = $color;
        $this->width = $width;
        $this->height = $height;
        $this->current_speed = $current_speed;
    }

    private function sub_fule()
    {
        $this->fule -= 1;
    }

    public function fast($speed)
    {
        $this->current_speed += $speed;
        $this->sub_fule();
    }

    public function slow($speed)
    {
        $this->current_speed -= $speed;
    }

    /* public function getInfo()
     {
         echo "This Car Width = " . $this->width . " , Height =" . $this->height . " And Speed =" . $this->current_speed . "<br>";
     }*/


    public function __destruct()
    {
        echo "<br>Close<br>";
    }

    public function __toString()
    {
        return "This Car Width = " . $this->width . " , Height =" . $this->height . " And Speed =" . $this->current_speed ."And Model =".$this->model. "<br>";;
    }

}