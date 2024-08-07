<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTablePortfolioTags extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'pt_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'port_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => false,
                'comment' => 'portfolio table id',
            ],
            'tag_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => false,
                'comment' => 'tag table id',
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 11,
                'default' => 'active',
            ],
        ]);
        $this->forge->addKey('pt_id', true);
        $this->forge->createTable('portfolio_tags');
    }

    public function down()
    {
        $this->forge->dropTable('portfolio_tags');
    }
}
