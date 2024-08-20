<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNewColumnToTestimonials extends Migration
{
    public function up()
    {
        $this->forge->addColumn('testimonials', [
            'cus_company' => [
                'type' => 'TEXT',
                'null' => true,
                'after' => 'cus_designation',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('testimonials', ['cus_company']);
    }
}
