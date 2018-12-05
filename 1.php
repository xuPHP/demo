<?php
class jiSan{
    private $a = 10;
    private $b = 20;

//    public function __construct($a=12,$b=23){
//        $this->$a = $a;
//        $this->$b = $b;
//    }

//    public function add(){
//        echo ($this->$a) + ($this->$b);
//    }

    function echo_a(){
        $a = "a";
        echo $this->$a;
    }

    function echo_b(){
        $a = "b";
        echo $this->$a;
    }
}

$result = new jiSan();
$result->echo_a();
$result->echo_b();