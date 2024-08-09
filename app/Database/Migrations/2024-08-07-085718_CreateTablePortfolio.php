<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTablePortfolio extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'port_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'ref_type' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
                'null' => false,
                'comment' => 'services/products => tables',
            ],
            'ref_no' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => false,
                'comment' => 's_id/pro_id => ids',
            ],
            'image_path' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'project_path' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => false,
            ],
            'subtitle' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
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
        $this->forge->addKey('port_id', true);
        $this->forge->createTable('portfolio');
    }

    public function down()
    {
        $this->forge->dropTable('portfolio');
    }
}
