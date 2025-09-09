<?php 
//programa para imprimir mensaje de bienvenida
//creado por Pedro Lael Velez Perez
//Fecha/09 de septiembre/2025
//appweb1.php
class texto
{
    public $texto1="Bienvenidos a programacion de app web";
    public function imprimirtexto()
    {
        echo $this ->texto1;
        print $this->texto1;
    }
}
$obj1= new texto;
$obj1->imprimirtexto();
?>