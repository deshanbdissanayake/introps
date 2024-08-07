<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PackagesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'ref_type' => 'services',
                'ref_no' => 1,
                'pkg_name' => 'Basic Package',
                'pkg_price' => 99.99,
                'pkg_fav' => 1,
                'status' => 'active',
                'c_date' => date('Y-m-d H:i:s'),
            ],
            [
                'ref_type' => 'products',
                'ref_no' => 2,
                'pkg_name' => 'Premium Package',
                'pkg_price' => 199.99,
                'pkg_fav' => 0,
                'status' => 'active',
                'c_date' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('packages')->insertBatch($data);
    }
}
