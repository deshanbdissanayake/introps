<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductScreenshotsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'pro_id' => 1, // Make sure this ID matches an existing product ID
                'image'  => 'screenshot_image_url',
                'status' => 'active',
                'c_date' => date('Y-m-d H:i:s'),
            ],
            // Add more sample data if needed
        ];

        $this->db->table('product_screenshots')->insertBatch($data);
    }
}
