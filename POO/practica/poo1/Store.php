<?php

/**
 * Description of Store
 *
 * @author daniel
 */
class Store {

    private string $producto;
    private int $total;
   
    public function __construct(string $producto, int $total) {

        $this->producto = $producto;
        $this->total = $total;
      
    }

    public function addTax(float $tax):Store {


        $this->total = $this->total * ($tax/100) + $this->total;  //total = t+total * task=

        //es lo mismo
        //$this->total +$this->total * $tax/100;
        
        return $this;
     
    }
    
     public function addDescount(float $descount):Store {


        $this->total = $this->total - $descount;  //total = t+total * task=

        //es lo mismo
        //$this->total +$this->total * $tax/100;
        
        return $this;
     
    }

    public function getTotal() {

        return $this->total;
    }
}
