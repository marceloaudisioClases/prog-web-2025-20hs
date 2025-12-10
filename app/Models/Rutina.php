<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ejercicio;

class Rutina extends Model
{
    use HasFactory;

        public function ejercicios()
        {
        return $this->hasMany(Ejercicio::class);
        }
}

