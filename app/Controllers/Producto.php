<?php
//todas las clases son con mayusculas y variales con minuscula
//cada que creo una vista creo un controller
//cambio el nombre de la clase y lo que retorna
namespace App\Controllers;

class Producto extends BaseController
{
    public function index(){
        return view('registroProducto');
    }

    public function registrar(){

        //1. recibir datos el from
        $producto = $this->request->getPost("producto");
        $fotografia = $this->request->getPost("fotografia");
        $precioUnidad  = $this->request->getPost("precioUnidad");
        $descripcion  = $this->request->getPost("descripcion");
        $tipodeAnimal = $this->request->getPost("tipodeAnimal");

        //2. construir un arreglo asociativo con los datos asosiativos
        $datos=array(
            "producto"=>$producto,
            "fotografia"=>$fotografia,
            "precioUnidad"=>$precioUnidad,
            "descripcion"=>$descripcion,
            "tipodeAnimal"=>$tipodeAnimal
        );

        print_r($datos);
    }
}
