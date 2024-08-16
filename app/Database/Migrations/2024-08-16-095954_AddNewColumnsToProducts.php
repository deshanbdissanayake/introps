<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNewColumnsToProducts extends Migration
{
    public function up()
    {
        $this->forge->addColumn('products', [
            'show_testimonials' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 0,
                'after'      => 'status',
            ],
            'show_features' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 0,
                'after'      => 'show_testimonials',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('products', ['show_testimonials', 'show_features']);
    }
}
