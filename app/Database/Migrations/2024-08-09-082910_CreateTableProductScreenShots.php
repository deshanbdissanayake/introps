<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableProductScreenShots extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'pss_id' => [
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
            'image' => [
                'type' => 'TEXT',
                'null' => false,
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
        $this->forge->addKey('pss_id', true);
        $this->forge->createTable('product_screenshots');
    }

    public function down()
    {
        $this->forge->dropTable('product_screenshots');
    }
}
