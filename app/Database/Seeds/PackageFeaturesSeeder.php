<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PackageFeaturesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'pkg_id' => 1,
                'pf_desc' => 'Feature 1 description',
                'pf_type' => 'common',
                'status' => 'active',
                'c_date' => date('Y-m-d H:i:s'),
            ],
            [
                'pkg_id' => 2,
                'pf_desc' => 'Feature 2 description',
                'pf_type' => 'unique',
                'status' => 'active',
                'c_date' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('package_features')->insertBatch($data);
    }
}

