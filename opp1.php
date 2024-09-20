<?php

class person {

    protected   $firstName;
    protected   $lastName;
    protected   $nickname;
    protected  $changedNickname = 0;
    protected $birthDate; // Propiedad para la fecha de nacimiento


    public function __construct($firstName, $lastName, $birthDate ){

        $this->firstName= $firstName;
        $this->lastName=$lastName;
        $this->birthDate = new DateTime($birthDate); // Convertimos la fecha a un objeto DateTime
    }

    public function getFirstName(){

        return $this->$firstName;
    }


public function getlastName(){

        return $this->$lastName;
    }

public function setNickname($nickname){

    if ($this->changedNickname >= 2){
        throw new Exception(  "No puedes cambair el Nickname mas de 2 veces" );
    }

    if (strlen($nickname) < 2) {
        throw new Exception("El Nickname debe tener al menos 2 caracteres.");
    }

    if ($nickname === $this->firstName || $nickname === $this->lastName) {
        throw new Exception("El Nickname no puede ser igual al nombre o apellido.");
    }

    $this->nickName=$nickname;
   
    $this->changedNickname++;
}

    public function getNickName(){

        return $this->nickname;
    }

    public function getFullName() {

        return $this->firstName . " " . $this->lastName;
    
    }

    public function getAge() { 
        $today = new DateTime(); // Fecha actual
        $age = $today->diff($this->birthDate); // Calculamos la diferencia
        return $age->y; // Retornamos la edad en años
    } 
} 

$person1 = new Person("Marcos", "Marin", "1996-01-18"); // Ejemplo de fecha de nacimiento
$person1->setNickname("MarcosNick"); // Nuevo apodo
$person1->setNickname("MarinNick"); // Segundo apodo

echo $person1->getFullName() . "<br>"; // Nombre completo
echo "Edad: " . $person1->getAge() . " años"; // Edad


