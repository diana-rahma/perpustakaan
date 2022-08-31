<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

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

        Admin::create([
            'name'	=> 'Admin',
            'telepon' => '081272466449',
            'jk' => 'Perempuan',
            'alamat' => 'Jl. Alamat Admin',
            'email'	=> 'admin@gmail.com',
            'password'	=> bcrypt('passwordadmin')
        ]);

        // User::create([
        //     'name'	=> 'Romusa',
        //     'nisn' => '21518',
        //     'telepon' => '081272466449',
        //     'jk' => 'Perempuan',
        //     'alamat' => 'Jl. Alamat Admin',
        //     'email'	=> 'admin@gmail.com',
        //     'password'	=> bcrypt('passwordadmin')
        // ]);
    }
}
