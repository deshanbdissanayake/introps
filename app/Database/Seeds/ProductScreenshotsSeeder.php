<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductScreenshotsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'pro_id' => 1, // Make sure this ID matches an existing product ID
                'title' => 'Home',
                'image'  => '/assets/images/introps/products/screenshots/ss_1.jpg',
                'status' => 'active',
                'c_date' => date('Y-m-d H:i:s'),
            ],
            [
                'pro_id' => 2, // Make sure this ID matches an existing product ID
                'title' => 'Home',
                'image'  => '/assets/images/introps/products/screenshots/ss_2.jpg',
                'status' => 'active',
                'c_date' => date('Y-m-d H:i:s'),
            ],
            [
                'pro_id' => 3, // Make sure this ID matches an existing product ID
                'title' => 'Home',
                'image'  => '/assets/images/introps/products/screenshots/ss_3.jpg',
                'status' => 'active',
                'c_date' => date('Y-m-d H:i:s'),
            ],
            [
                'pro_id' => 4, // Make sure this ID matches an existing product ID
                'title' => 'Home',
                'image'  => '/assets/images/introps/products/screenshots/ss_4.jpg',
                'status' => 'active',
                'c_date' => date('Y-m-d H:i:s'),
            ],
            [
                'pro_id' => 5, // Make sure this ID matches an existing product ID
                'title' => 'Home',
                'image'  => '/assets/images/introps/products/screenshots/ss_5.jpg',
                'status' => 'active',
                'c_date' => date('Y-m-d H:i:s'),
            ],
            [
                'pro_id' => 6, // Make sure this ID matches an existing product ID
                'title' => 'Home',
                'image'  => '/assets/images/introps/products/screenshots/ss_6.jpg',
                'status' => 'active',
                'c_date' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('product_screenshots')->insertBatch($data);
    }
}
