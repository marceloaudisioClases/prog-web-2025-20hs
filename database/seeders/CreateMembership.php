<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Membership;

class CreateMembership extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Membership::create(["name"=>"Pase Libre"]);
        Membership::create(["name"=>"Invitado"]);
    }
}
