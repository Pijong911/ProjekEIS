<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Load the Faker library
        $faker = \Faker\Factory::create();

        // Define the number of fake records to generate
        $numberOfRecords = 50;

        // Initialize the data array
        $data = [];

        // Generate the fake data
        for ($i = 0; $i < $numberOfRecords; $i++) {
            $data[] = [
                'nama' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => ($faker->password),
            ];
        }

        // Using Query Builder to insert the data
        $this->db->table('user')->insertBatch($data);
    }
}
