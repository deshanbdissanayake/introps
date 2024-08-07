<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TagsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'tag_name' => 'Tag 1',
                'status' => 'active',
            ],
            [
                'tag_name' => 'Tag 2',
                'status' => 'active',
            ],
        ];

        $this->db->table('tags')->insertBatch($data);
    }
}
