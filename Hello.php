<?php

require __DIR__ . "/vendor/autoload.php";

/**
 * Created by PhpStorm.
 * User: manel
 * Date: 06/10/15
 * Time: 19:31
 */
class Hello
{
    public $faker;

    /**
     * Hello constructor.
     */
    public function __construct()
    {
        $this->faker = Faker\Factory::create();
    }

    public function sayHello()
    {
        echo "Hola ".$this->faker->name."!\n";
    }
}