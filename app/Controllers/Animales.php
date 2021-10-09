<?php
//todas las clases son con mayusculas y variales con minuscula
//cada que creo una vista creo un controller
//cambio el nombre de la clase y lo que retorna
namespace App\Controllers;

class Animales extends BaseController
{
    public function index(){
        return view('registroAnimales');
    }
}