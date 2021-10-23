<?php

namespace App\Models;

use CodeIgniter\Model;

class AnimalModelo extends Model
{
    protected $table = 'animales';
    protected $primaryKey = 'idAnimal';

    protected $allowedFields = ['nombre', 'edad', 'foto', 'descripcion', 'tipo'];
}