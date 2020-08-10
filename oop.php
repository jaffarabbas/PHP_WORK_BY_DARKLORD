<?php


interface firstinterface{
    public function check();
}


class first implements firstinterface{
    var $check;
    function sum($a){
        echo $a;
    }
    public function check(){
        echo "ksjdhfkjsdfjkshfkjshfsd";
    }
    function __construct(){
        echo "this is constructer</br>" ;
    }
}

class reff{
    var $num1;
    var $num2;
    public function __construct($num,$num2){
        $this->num1 = $num;
        $this->num2 = $num2;
        echo $this->$num1,$this->$num2,"First contructer";
    }
} 
class pop extends reff{
    public function pop(){
        __construct::__construct(2,3);
        echo "second contructer";
    }
}
$obj = new first;
echo "hello : ",$obj->sum(3),"</br>";
$obj->check();
?>