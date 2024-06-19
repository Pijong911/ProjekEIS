<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ObatSeeder extends Seeder
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
                'nama_obat' => $faker->word,
                'stock' => $faker->numberBetween(1, 1000),
                'Gambar' => $faker->imageUrl(640, 480, 'medicine', true, 'Faker')
            ];
        }

        // Using Query Builder to insert the data
        $this->db->table('obat')->insertBatch($data);
    }
}
