<?php
require_once 'Car.php';

class Ford extends Car
{

    public static $is_electric_window = true;

    public function up_window()
    {

    }

    public function down_windo()
    {

    }

    public function max_Speed()
    {
        $this->model = 2000;
        echo self::$is_electric_window;
    }

    public static function change_window()
    {
      self::$is_electric_window=true;
    }
}