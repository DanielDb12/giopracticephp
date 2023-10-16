<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of intro
 *
 * @author daniel
 */
require_once 'Transactions.php';


$class = "Transactions";

  
$trans = (new Transactions("Mango", 1500))
        ->addTax(8)
        ->descount(10);

$trans2 = (new $class("Mango", 1500))
        ->addTax(8)
        ->descount(10)
        
        ;

//var_dump($trans->getAmount() );

$str = '{"a":3,"v":2,"c":1}';

$str = json_decode($str);

//var_dump($str->v);


$arr = [1,2,3];

//$obj =(object) $arr;

//var_dump($obj->{1});

//$obj =((object)1);
$obj =((object)false);
var_dump($obj->scalar);


