<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableTeam extends Migration
{
    public function up()
    {
        $this->forge->addField([
            't_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => false,
            ],
            'designation' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => false,
            ],
            'facebook' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => true,
            ],
            'linkedin' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => true,
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
        $this->forge->addKey('t_id', true);
        $this->forge->createTable('team');
    }

    public function down()
    {
        $this->forge->dropTable('team');
    }
}
