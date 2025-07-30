<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersFakerSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        // Buat 10 user palsu
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'email'    => $faker->unique()->safeEmail,
                'password' => 'password'.$i, // tambah variable jika ingin membuat password berbeda
            ];

            $this->db->table('users')->insert($data);
        }
    }
}
