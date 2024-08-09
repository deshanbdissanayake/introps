<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableTestimonials extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'test_id' => [
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
                'constraint' => 11,
                'null' => false,
                'comment' => 's_id/pro_id => ids',
            ],
            'cus_name' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => false,
            ],
            'cus_image' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => false,
            ],
            'rating' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'default' => '5.00',
            ],
            'review' => [
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
        $this->forge->addKey('test_id', true);
        $this->forge->createTable('testimonials');
    }

    public function down()
    {
       $this->forge->dropTable('testimonials');
    }
}
