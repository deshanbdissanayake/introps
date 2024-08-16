<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPortfolioViewToPortfolio extends Migration
{
    public function up()
    {
        $this->forge->addColumn('portfolio', [
            'portfolio_view' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 0,
                'after'      => 'status',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('portfolio', 'portfolio_view');
    }
}
