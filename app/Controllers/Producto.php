<?php
//todas las clases son con mayusculas y variales con minuscula
//cada que creo una vista creo un controller
//cambio el nombre de la clase y lo que retorna
namespace App\Controllers;

use App\Models\ProductoModelo;

class Producto extends BaseController
{
    public function index(){
        return view('registroProducto');
    }

    public function registrarProducto(){

        //1. recibir datos el from
        $producto = $this->request->getPost("producto");
        $fotografia = $this->request->getPost("fotografia");
        $precioUnidad  = $this->request->getPost("precioUnidad");
        $descripcion  = $this->request->getPost("descripcion");
        $tipodeAnimal = $this->request->getPost("tipodeAnimal");

        //se aplican validaciones 
        if($this->validate('formularioProducto')){
            //los objetos son las variables que utilizna las clases
            //intentar
            try {
                //sacar una fotocopia de la clase(crear objeto)"instanciar la clase"
                $modelo = new ProductoModelo();

                //armo el paquete de datos a registrar
                $datos=array(
                    "nombre"=>$producto,
                    "foto"=>$fotografia,
                    "precio"=>$precioUnidad,
                    "descripcion"=>$descripcion,
                    "tipo"=>$tipodeAnimal
                 );

                //agregro los datos 
                $modelo->insert($datos);

                //entrego una respuesta
                $mensaje ="Exito agregando el producto";
                return redirect()->to(site_url('/RegistroProducto'))->with('mensaje',$mensaje);

            } catch (\Exception $error) {
                $mensaje = $error->getMessage();
                return redirect()->to(site_url('/RegistroProducto'))->with('mensaje',$mensaje);
            }
        }else{
            $mensaje = "HAY CAMPOS SIN LLENAR";
            return redirect()->to(site_url('/RegistroProducto'))->with('mensaje',$mensaje);
        }
    }
}
