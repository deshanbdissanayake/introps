<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableDepartment extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'dep_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'dep_name' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => false,
            ],
            'dep_desc' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => true,
            ],
            'dep_image' => [
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
                'null' => true,
            ],
        ]);
        $this->forge->addKey('dep_id', true);
        $this->forge->createTable('department');
    }

    public function down()
    {
        $this->forge->dropTable('department');
    }
}
