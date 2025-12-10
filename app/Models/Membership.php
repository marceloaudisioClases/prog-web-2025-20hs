<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $table = "memberships";
    protected $fillable = ["name","state"];

    public function Clients(){
        return $this->hasMany(Client::class);
    }    
}
