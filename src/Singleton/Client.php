<?php

// autoload
spl_autoload_register(function ($class) {
    require "$class.php";
});

$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();

if ($s1 === $s2) {
    echo '两个对象是相同的实例' . PHP_EOL;
} else {
    echo '两个对象是不同的实例' . PHP_EOL;
}