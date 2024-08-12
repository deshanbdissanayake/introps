<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableProductFeatures extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'prof_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'pro_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => false,
            ],
            'icon' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            't_title' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => false,
            ],
            't_desc' => [
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
        $this->forge->addKey('prof_id', true);
        $this->forge->createTable('product_features');
    }

    public function down()
    {
        $this->forge->dropTable('product_features');
    }
}
