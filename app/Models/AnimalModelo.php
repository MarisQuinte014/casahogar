<?php

namespace App\Models;

use CodeIgniter\Model;

class AnimalModelo extends Model
{
    protected $table = 'animales';
    protected $primaryKey = 'idAnimal';
    protected $allowedFields = ['nombre', 'edad', 'foto', 'descripcion', 'tipo'];

    public function buscarAnimalPerro(){
        $consulta = $this->db->query("SELECT * FROM animales WHERE tipo = 1");
        return $consulta->getResultArray();
    }
    public function buscarAnimalGato(){
        $consulta = $this->db->query("SELECT * FROM animales WHERE tipo = 2");
        return $consulta->getResultArray();
    }
    public function buscarAnimalAve(){
        $consulta = $this->db->query("SELECT * FROM animales WHERE tipo = 3");
        return $consulta->getResultArray();
    }
    public function buscarAnimalReptil(){
        $consulta = $this->db->query("SELECT * FROM animales WHERE tipo = 5");
        return $consulta->getResultArray();
    }
    public function buscarAnimalCaballo(){
        $consulta = $this->db->query("SELECT * FROM animales WHERE tipo = 4");
        return $consulta->getResultArray();
    }
}