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
                's_work_title' => 'Our Awesome Recent Projects',
                's_work_desc' => 'Explore our latest web applications that showcase our commitment to innovation and quality.',
                's_pricing_title' => 'Simple Pricing',
                's_pricing_desc' => 'We offer three straightforward packages designed to meet varying needs and budgets. Whether youre a startup or an enterprise, find the perfect plan that aligns with your goals.',
                'status' => 'active',
                'c_date' => date('Y-m-d H:i:s'),
            ],
            [
                's_title' => 'Service 2',
                's_subtitle' => 'Subtitle 2',
                's_bgimage' => 'path/to/image2.jpg',
                's_intro_title' => 'Intro 2',
                's_intro_desc' => 'Description 2',
                's_work_title' => 'Our Awesome Recent Projects',
                's_work_desc' => 'Explore our latest web applications that showcase our commitment to innovation and quality.',
                's_pricing_title' => 'Simple Pricing',
                's_pricing_desc' => 'We offer three straightforward packages designed to meet varying needs and budgets. Whether youre a startup or an enterprise, find the',
                'status' => 'active',
                'c_date' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('services')->insertBatch($data);
    }
}
