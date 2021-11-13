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
        try{
        $modelo = new AnimalModelo();
        $resultado = $modelo->findAll();
        $animales = array("animales" => $resultado);
        return view('listaAnimales', $animales);
        }
        catch (\Exception $error) {
            $mensaje = $error->getMessage();
            return redirect()->to(site_url('/RegistroAnimales'))->with('mensaje',$mensaje);
        }
    }

    public function eliminar($idAnimal){
        try {
            $modelo = new AnimalModelo();

            //utlizar el modelo para hablar con la bd y buscar todos los datos de la tabla y eliminar el registro con el id capturado
            $modelo->where('idAnimal',$idAnimal)->delete();

            $mensaje ="Exito eliminando el animal";
                return redirect()->to(site_url('/RegistroAnimales'))->with('mensaje',$mensaje);
                
        } catch (\Exception $error) {
            $mensaje = $error->getMessage();
            return redirect()->to(site_url('/RegistroAnimales'))->with('mensaje',$mensaje);
        }
    }

    public function editar($idAnimal){
        $nombre= $this->request->getPost("nombre");
        $edad= $this->request->getPost("edad");
        $descripcion= $this->request->getPost("descripcion");

        if($this->validate('formularioEditarAnimales')){
            try {
                $modelo = new AnimalModelo();
                $datos=array(
                    "nombre"=>$nombre,
                    "edad"=>$edad,
                    "descripcion"=>$descripcion
                );
                $modelo->update($idAnimal,$datos);

                $mensaje ="Exito actualizando el animal";
                return redirect()->to(site_url('/RegistroAnimales'))->with('mensaje',$mensaje);
            } catch (\Exception $error) {
                $mensaje = $error->getMessage();
                return redirect()->to(site_url('/RegistroAnimales'))->with('mensaje',$mensaje);
            }
        }else{
            $mensaje = "ERROR ACTUALIZANDO EL ANIMAL ".$idAnimal;
            return redirect()->to(site_url('/RegistroAnimales'))->with('mensaje',$mensaje);
        }
    }

    public function buscarAnimalPerro(){
        try{
            $modelo = new AnimalModelo();
            $buscarAnimal = $modelo->buscarAnimalPerro();

            $animales = array("animales"=>$buscarAnimal);
            return view('listaAnimales',$animales);
        }catch (\Exception $error) {
            $mensaje = $error->getMessage();
            return redirect()->to(site_url('/RegistroAnimales'))->with('mensaje',$mensaje);
        }
    }
    public function buscarAnimalGato(){
        try{
        $modelo = new AnimalModelo();
        $buscarAnimal = $modelo->buscarAnimalGato();

        $animales = array("animales"=>$buscarAnimal);
        return view('listaAnimales', $animales);
        }catch (\Exception $error) {
            $mensaje = $error->getMessage();
            return redirect()->to(site_url('/RegistroAnimales'))->with('mensaje',$mensaje);
        }
    }
    public function buscarAnimalAve(){
        try{
        $modelo = new AnimalModelo();
        $buscarAnimal = $modelo->buscarAnimalAve();

        $animales = array("animales"=>$buscarAnimal);
        return view('listaAnimales', $animales);
        }catch (\Exception $error) {
            $mensaje = $error->getMessage();
            return redirect()->to(site_url('/RegistroAnimales'))->with('mensaje',$mensaje);
        }
    }
    public function buscarAnimalCaballo(){
        try{
        $modelo = new AnimalModelo();
        $buscarAnimal = $modelo->buscarAnimalCaballo();

        $animales = array("animales"=>$buscarAnimal);
        return view('listaAnimales', $animales);
        }catch (\Exception $error) {
            $mensaje = $error->getMessage();
            return redirect()->to(site_url('/RegistroAnimales'))->with('mensaje',$mensaje);
        }
    }
    public function buscarAnimalReptil(){
        try{
        $modelo = new AnimalModelo();
        $buscarAnimal = $modelo->buscarAnimalReptil();

        $animales = array("animales"=>$buscarAnimal);
        return view('listaAnimales', $animales);
        }catch (\Exception $error) {
            $mensaje = $error->getMessage();
            return redirect()->to(site_url('/RegistroAnimales'))->with('mensaje',$mensaje);
        }
    }
}