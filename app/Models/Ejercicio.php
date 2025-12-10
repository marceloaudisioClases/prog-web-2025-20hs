<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rutina;

class Ejercicio extends Model
{
    use HasFactory;

        public function rutina()
        {
        return $this->belongsTo(Rutina::class);
        }

}
