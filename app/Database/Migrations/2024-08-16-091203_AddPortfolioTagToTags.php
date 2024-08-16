<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPortfolioTagToTags extends Migration
{
    public function up()
    {
        // Add a new column `main_tag` to the `services` table
        $this->forge->addColumn('tags', [
            'portfolio_tags' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 0,
                'after'      => 'status',
            ],
        ]);
    }

    public function down()
    {
        // Remove the `main_tag` column if rolling back the migration
        $this->forge->dropColumn('tags', 'portfolio_tags');
    }
}
