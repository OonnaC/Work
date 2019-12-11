<?php

abstract class A {
    
    public function __construct() {
        echo "Classe : ".__CLASS__."<br />";
    }
}

class B extends A {
    
    public function __construct() {
        echo "Classe : ".__CLASS__."<br />";
        parent::__construct();
    }
}

echo "Instanciation de la classe B: <br />";
$var = new B();
echo "<br />";
echo "Instanciation de la classe A: <br />";
$var = new A();