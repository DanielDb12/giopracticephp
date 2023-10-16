<?php




require_once 'Store.php';





$article = (new Store("uvas", 1500,10))
        ->addTax(10)
        ->addDescount(20)
        ;
        
        
        
        
$total=1500;   


var_dump($article->getTotal());
//echo $total+=$total * 10/100; //+5(5*10) = 50/100=0.5
echo ($total+=$total) * (10/100);
