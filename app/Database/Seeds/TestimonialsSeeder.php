<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'ref_type' => 'services',
                'ref_no' => 1,
                'cus_name' => 'Customer 1',
                'cus_image' => 'path/to/image1.jpg',
                'rating' => 5.00,
                'review' => 'Great service!',
                'status' => 'active',
                'c_date' => date('Y-m-d H:i:s'),
            ],
            [
                'ref_type' => 'products',
                'ref_no' => 2,
                'cus_name' => 'Customer 2',
                'cus_image' => 'path/to/image2.jpg',
                'rating' => 4.50,
                'review' => 'Good product!',
                'status' => 'active',
                'c_date' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('testimonials')->insertBatch($data);
    }
}
