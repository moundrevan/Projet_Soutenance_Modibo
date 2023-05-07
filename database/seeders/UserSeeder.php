<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'prenom' => 'Modibo',
            'nom' => 'SAMAKE',
            'matricule' => '16D1M12992Z',
            'sexe' => 'H',
            'dateNaissance' => '1996-18-10',
            'lieuNaissance' => 'Siribala',
            'telephone' => '+22374765475',
            'email' => 'samake@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
