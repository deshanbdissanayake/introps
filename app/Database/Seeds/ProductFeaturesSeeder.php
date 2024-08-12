<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductFeaturesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'pro_id'   => 1, // Make sure this ID matches an existing product ID
                'icon'     => 'pe-7s-box1',
                't_title'  => 'Feature Title',
                't_desc'   => 'Feature Description',
                'status'   => 'active',
                'c_date'   => date('Y-m-d H:i:s'),
            ],
            // Add more sample data if needed
        ];

        $this->db->table('product_features')->insertBatch($data);
    }
}
