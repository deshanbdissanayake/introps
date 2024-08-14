<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDepartmentIdToTeam extends Migration
{
    public function up()
    {
        $this->forge->addColumn('team', [
            'dep_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
                'after' => 't_id',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('team', 'dep_id');
    }
}
