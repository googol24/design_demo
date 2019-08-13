<?php

// 自动加载
spl_autoload_register(function ($file) {
   if (is_file(__DIR__ . '/' . "$file.php")) {
       require_once __DIR__ . '/' . "$file.php";
   }
});

$fund = new Fund();

// 基金购买
$fund->buyFund();

// 基金赎回
$fund->sellFund();