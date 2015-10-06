<?php

namespace Com\Iesebre\Dam2\manelhuguet\helloworldcomposer;

use Faker\Factory;

// require __DIR__ . "/../vendor/autoload.php";

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
        $this->faker = Factory::create();
    }

    public function sayHello()
    {
        echo "Hola ".$this->faker->name."!\n";
    }
}