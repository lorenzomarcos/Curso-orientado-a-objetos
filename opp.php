<?php


class Phone{
    var $model;
    var $color;
    var $company;


function __construct($model, $color,$company) {

    $this->model = $model;
    $this->color = $color;
    $this->company= $company;


}




function call() {

    echo "Estoy llamando a otro movil ";
}


function sms (){


    echo "estoy enviando un mesaje de texto ";
}





}


$nokia = new Phone ("nokia" ,"negro", "digitel");


echo $nokia->sms();
echo $nokia->color;