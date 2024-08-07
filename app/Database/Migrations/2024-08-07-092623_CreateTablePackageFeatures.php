<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTablePackageFeatures extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'pf_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'pkg_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => false,
            ],
            'pf_desc' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
                'null' => false,
            ],
            'pf_type' => [
                'type' => 'VARCHAR', 
                'constraint' => 11,
                'default' => 'common',
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 11,
                'default' => 'active',
            ],
            'c_date' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('pf_id', true);
        $this->forge->createTable('package_features');
    }

    public function down()
    {
        $this->forge->dropTable('package_features');
    }
}
