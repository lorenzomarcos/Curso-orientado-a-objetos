<?php


 abstract class Unit {

    protected $alive=true;
    protected  $name;
    
    
    public function __construct($name){
        $this->name=$name;
    }

    public function move ($direction){
echo "<p>{$this->name} camina hacia $direction</p>";
    }

  abstract  public function attack ($opponent);
}

class  Soldier extends Unit{

    public function attack ($opponent){
        echo "<p>{$this->name} Corta a $opponent en dos </p>";
            }

}

class Archer extends Unit{
    public function attack ($opponent){
        echo "<p>{$this->name} Dispara una flecha a $opponent  </p>";
            }
}

$silince=new Archer ("silence");
//$silince->move("el norte");
$silince->attack("ramm");
