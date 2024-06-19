<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Obat extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type" => "INT",
                "unsigned" => true,
                "auto_increment" => true,
            ],
            "nama_obat" => [
                "type" => "VARCHAR",
                "constraint" => "200",
            ],
            "stock" => [
                "type" => "INT",
                "null" => true,
                "default" => null,
            ],
            "Gambar" => [
                "type" => "VARCHAR",
                "constraint" => "255", // Added constraint
                "null" => true, // Added null to handle optional values
                "default" => null,
            ],
        ];
        
        $this->forge->addField($fields);
        $this->forge->addKey('id', true);
        $this->forge->createTable('obat', true);
    }

    public function down()
    {
        $this->forge->dropTable('obat', true);
    }
}
