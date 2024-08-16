<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddShowWorkToServices extends Migration
{
    public function up()
    {
        // Add a new column `show_work` to the `services` table
        $this->forge->addColumn('services', [
            'show_work' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 1,
                'after'      => 's_intro_desc'
            ],
        ]);
    }

    public function down()
    {
        // Remove the `show_work` column if rolling back the migration
        $this->forge->dropColumn('services', 'show_work');
    }
}
