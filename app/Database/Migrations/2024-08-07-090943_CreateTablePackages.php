<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTablePackages extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'pkg_id' => [
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
            'pkg_name' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false,
            ],
            'pkg_price' => [
                'type' => 'DECIMAL',
                'default' => '0.00',
                'constraint' => '10,2',
                'null' => false,
            ],
            'pkg_fav' => [
                'type' => 'BOOLEAN',
                'default' => false,
                'comment' => 'recommended package',
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
        $this->forge->addKey('pkg_id', true);
        $this->forge->createTable('packages');
    }

    public function down()
    {
        $this->forge->dropTable('packages');
    }
}
