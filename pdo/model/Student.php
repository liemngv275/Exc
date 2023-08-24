<?php
namespace Models;
use JsonSerializable;

class Product implements JsonSerializable{
    private int $id;
    private string $name;
    private bool $sex;
    private string $age;
    private string $lop;
    public function __construct($id, $name, $sex, $age, $lop){
        $this->id = $id;
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
        $this->lop = $lop;

    }
    
    public function jsonSerialize() {
        return  [
            'id' => $this->id,
            'name' => $this->name,
            'sex' => $this->sex,
            'age' => $this->age,
            'lop' => $this->lop,
        ];
    }


    public function __toString()
    {
        return "Name: " . $this->getName() . " price: " . $this->getLop() . "<br>";
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function getSex(){
        return $this->sex;
    }
     public function getLop(){
        return $this->sex;
    }
    
    public function setId($id){
        $this->id = $id;
    }

    public function setName($name){
        $this->name = $name;
    }
    public function setSex($sex){
        $this->sex = $sex;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function setLop($lop){
        $this->lop = $lop;
    }
    
}

?>