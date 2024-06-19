<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type" => "INT",
                "unsigned" => true,
                "auto_increment" => true,
            ],
            "nama" => [
                "type" => "VARCHAR",
                "constraint" => "200",
            ],
            "email" => [
                "type" => "VARCHAR",
                "constraint" => "200",
                "unique" => true,
            ],
            "password" => [
                "type" => "VARCHAR",
                "constraint" => "255",
            ],
        ];

        $this->forge->addField($fields);
        $this->forge->addKey('id', true);
        $this->forge->createTable('user', true);
    }

    public function down()
    {
        $this->forge->dropTable('user', true);
    }
}