<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PortfolioTagsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'port_id' => 1,
                'tag_id' => 1,
                'status' => 'active',
            ],
            [
                'port_id' => 2,
                'tag_id' => 2,
                'status' => 'active',
            ],
        ];

        $this->db->table('portfolio_tags')->insertBatch($data);
    }
}
