<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // Allow mass assignment for these fields
    protected $fillable = [
        'name', 'last_name','membership_id', 'password',
    ];

    // Optional: If you want to specify that password should always be hidden from JSON responses
    protected $hidden = [
        'password',
    ];

    public function membership(){
        return $this->belongsTo(Membership::class);
    }
}
