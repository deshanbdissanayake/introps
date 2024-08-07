<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('PackageFeaturesSeeder');
        $this->call('PackagesSeeder');
        $this->call('PortfolioSeeder');
        $this->call('PortfolioTagsSeeder');
        $this->call('ServicesSeeder');
        $this->call('TagsSeeder');
        $this->call('TestimonialsSeeder');
    }
}
