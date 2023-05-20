<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //$this->call(UserSeeder::class);
        User::create([
            'prenom' => 'admin-Modibo',
            'nom' => 'admin-SAMAKE',
            'matricule' => '16D1M12992Z',
            'sexe' => 'H',
            'dateNaissance' => '1996-18-10',
            'lieuNaissance' => 'Siribala',
            'telephone' => '+22374765475',
            'is_admin' => 1,
            'is_etudiant' => 0,
            'is_prof' => 0,
            'email' => 'asamake@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        User::create([
            'prenom' => 'prof-Modibo',
            'nom' => 'prof-SAMAKE',
            'matricule' => '16D1M12992P',
            'sexe' => 'H',
            'dateNaissance' => '1996-18-10',
            'lieuNaissance' => 'Siribala',
            'telephone' => '+22374765471',
            'is_admin' => 0,
            'is_etudiant' => 0,
            'is_prof' => 1,
            'email' => 'psamake@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        User::create([
            'prenom' => 'etudiant-Modibo',
            'nom' => 'etudiant-SAMAKE',
            'matricule' => '16D1M12992E',
            'sexe' => 'H',
            'dateNaissance' => '1996-18-10',
            'lieuNaissance' => 'Siribala',
            'telephone' => '+22374765470',
            'is_admin' => 0,
            'is_etudiant' => 1,
            'is_prof' => 0,
            'email' => 'esamake@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
