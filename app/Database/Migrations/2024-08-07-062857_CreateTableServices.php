<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableServices extends Migration
{
    public function up()
    {
        $this->forge->addField([
            's_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            's_title' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            's_subtitle' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
                'null' => false,
            ],
            's_bgimage' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            's_intro_title' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
                'null' => false,
            ],
            's_intro_desc' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            's_work_title' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
                'null' => false,
            ],
            's_work_desc' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'show_price' => [
                'type' => 'BOOLEAN',
                'default' => true,
            ],
            's_pricing_title' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
                'null' => false,
            ],
            's_pricing_desc' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 11,
                'default' => 'active',
                'comment' => 'active/delete',
            ],
            'c_date' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('s_id', true);
        $this->forge->createTable('services');
    }

    public function down()
    {
        $this->forge->dropTable('services');
    }
}
