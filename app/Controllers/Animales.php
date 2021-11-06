<?php
//todas las clases son con mayusculas y variales con minuscula
//cada que creo una vista creo un controller
//cambio el nombre de la clase y lo que retorna
namespace App\Controllers;

use App\Models\AnimalModelo;

class Animales extends BaseController
{
    public function index(){
        return view('registroAnimales');
    }

    public function registrarAnimales(){
        
        $nombre= $this->request->getPost("nombre");
        $edad= $this->request->getPost("edad");
        $foto= $this->request->getPost("foto");
        $descripcion= $this->request->getPost("descripcion");
        $tipoAnimal= $this->request->getPost("tipoAnimal");

       if($this->validate('formularioAnimales')){
        try {
              //sacar una fotocopia de la clase(crear objeto)"instanciar la clase"
              $modelo = new AnimalModelo();

              //armo el paquete de datos a registrar
              $datos=array(
                  "nombre"=>$nombre,
                  "edad"=>$edad,
                  "foto"=>$foto,
                  "descripcion"=>$descripcion,
                  "tipo"=>$tipoAnimal
               );

              //agregro los datos 
              $modelo->insert($datos);

              //entrego una respuesta
              $mensaje ="Exito agregando el producto";
              return redirect()->to(site_url('/RegistroAnimales'))->with('mensaje',$mensaje);

        } catch (\Exception $error) {
            $mensaje = $error->getMessage();
            return redirect()->to(site_url('/RegistroAnimales'))->with('mensaje',$mensaje);
        }
    }
    else
    {
        $mensaje = "HAY CAMPOS SIN LLENAR";
        return redirect()->to(site_url('/RegistroAnimales'))->with('mensaje',$mensaje);
        }
    }

    public function buscar(){

    }
}