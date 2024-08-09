<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableProducts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'pro_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'home_title' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
                'null' => false,
            ],
            'home_desc' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'home_bgimage' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'home_path' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'home_video_link' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'intro_title' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
                'null' => false,
            ],
            'intro_desc' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'features_title' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
                'null' => false,
            ],
            'features_desc' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'show_price' => [
                'type' => 'BOOLEAN',
                'default' => true,
            ],
            'pricing_title' => [],
            'pricing_desc' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'testimonials_title' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
                'null' => false,
            ],
            'testimonials_desc' => [
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
        $this->forge->addKey('pro_id', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
