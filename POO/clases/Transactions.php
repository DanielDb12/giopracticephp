<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Transactions
 *
 * @author daniel
 */

class Transactions {

    private string $name;
    private int $total;

    public function __construct(string $name, int $total) {

        $this->name = $name;
        $this->total = $total;
    }
    
    public function addTax(int $rate):Transactions {
        
        $this->total += $this->total + $this->total * $rate /100;
        
     
        
        return $this;
    }
    public function descount(int $total):Transactions {
        
        $this->total -= $total;
        
        return $this;
    }
   
    public function getAmount():int {
    
        return $this->total;
        
        
}
    

public function __destruct() {
echo "Destruc" . $this->name . '</br>';
}
   
}
