<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'ref_type' => 'services',
                'ref_no' => 1,
                'image_path' => 'path/to/image1.jpg',
                'project_path' => 'path/to/project1',
                'title' => 'Project 1',
                'subtitle' => 'Subtitle 1',
                'status' => 'active',
                'c_date' => date('Y-m-d H:i:s'),
            ],
            [
                'ref_type' => 'products',
                'ref_no' => 2,
                'image_path' => 'path/to/image2.jpg',
                'project_path' => 'path/to/project2',
                'title' => 'Project 2',
                'subtitle' => 'Subtitle 2',
                'status' => 'active',
                'c_date' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('portfolio')->insertBatch($data);
    }
}
