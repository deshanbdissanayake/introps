<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'home_title'       => 'Sample Product',
                'home_desc'        => 'Description of the sample product',
                'home_bgimage'     => 'background_image_url',
                'home_path'        => 'path_to_home',
                'home_video_link'  => 'video_link',
                'intro_title'      => 'Introduction Title',
                'intro_desc'       => 'Introduction Description',
                'features_title'   => 'Features Title',
                'features_desc'    => 'Features Description',
                'show_price'       => 1,
                'pricing_title'    => 'Pricing Title',
                'pricing_desc'     => 'Pricing Description',
                'testimonials_title'=> 'Testimonials Title',
                'testimonials_desc'=> 'Testimonials Description',
                'status'           => 'active',
                'c_date'           => date('Y-m-d H:i:s'),
            ],
            // Add more sample data if needed
        ];

        $this->db->table('products')->insertBatch($data);
    }
}
