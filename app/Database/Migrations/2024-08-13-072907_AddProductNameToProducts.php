<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddProductNameToProducts extends Migration
{
    public function up()
    {
        $this->forge->addColumn('products', [
            'product_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
                'after' => 'pro_id',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('products', 'product_name');
    }
}
