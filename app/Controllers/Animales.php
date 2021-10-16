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

    public function registrarAnimales(){
        
        $datosAnimales=array(
            "nombre"=>$nombre= $this->request->getPost("nombre"),
            "edad"=>$edad= $this->request->getPost("edad"),
            "foto"=>$foto= $this->request->getPost("foto"),
            "descripcion"=>$descripcion= $this->request->getPost("descripcion"),
            "tipoAnimal"=>$tipoAnimal= $this->request->getPost("tipoAnimal"),

        );
       // print_r($datosAnimales);

       if($this->validate('formularioAnimales')){
        echo("Todo bien papa");
    }else{
        echo("tenemos problemas papa");
    }
    }
}