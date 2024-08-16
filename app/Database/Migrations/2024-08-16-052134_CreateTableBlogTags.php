<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableBlogTags extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'bt_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'blog_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => false,
                'comment' => 'blog table id',
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
                'comment' => 'active/delete',
            ],
        ]);
        $this->forge->addKey('bt_id', true);
        $this->forge->createTable('blog_tags');
    }

    public function down()
    {
        $this->forge->dropTable('blog_tags');
    }
}
