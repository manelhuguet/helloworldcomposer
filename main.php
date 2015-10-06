<?php

//require __DIR__ . "/src/Hello.php";
require __DIR__ . "/vendor/autoload.php";

use Com\Iesebre\Dam2\manelhuguet\helloworldcomposer\Hello;


/**
 * Created by PhpStorm.
 * User: manel
 * Date: 06/10/15
 * Time: 19:32
 */
$greetings = new Hello();

$greetings ->sayHello();

