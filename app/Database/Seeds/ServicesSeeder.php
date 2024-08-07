<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ServicesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                's_title' => 'Service 1',
                's_subtitle' => 'Subtitle 1',
                's_bgimage' => 'path/to/image1.jpg',
                's_intro_title' => 'Intro 1',
                's_intro_desc' => 'Description 1',
                'status' => 'active',
                'c_date' => date('Y-m-d H:i:s'),
            ],
            [
                's_title' => 'Service 2',
                's_subtitle' => 'Subtitle 2',
                's_bgimage' => 'path/to/image2.jpg',
                's_intro_title' => 'Intro 2',
                's_intro_desc' => 'Description 2',
                'status' => 'active',
                'c_date' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('services')->insertBatch($data);
    }
}
