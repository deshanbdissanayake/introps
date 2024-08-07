<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableTags extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'tag_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'tag_name' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 11,
                'default' => 'active',
            ],
        ]);
        $this->forge->addKey('tag_id', true);
        $this->forge->createTable('tags');
    }

    public function down()
    {
        $this->forge->dropTable('tags');
    }
}
