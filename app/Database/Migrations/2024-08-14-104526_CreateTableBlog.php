<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableBlog extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'blog_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => true,
            ],
            'image' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'published_by' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => true,
            ],
            'publish_date' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'short_desc' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'intro' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'paragraph_1' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'paragraph_2' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'paragraph_3' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'paragraph_4' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'conclusion' => [
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
        $this->forge->addKey('blog_id', true);
        $this->forge->createTable('blog');
    }

    public function down()
    {
        $this->forge->dropTable('blog');
    }
}
