<?php

namespace App\Models;

use CodeIgniter\Model;

class Testimonials_m extends Model{
    public function getAllData($limit = 'all') {
        $builder = $this->db->table('testimonials');
        
        if($limit !== 'all'){
            $builder->limit($limit);
        }

        $data = $builder->select('*')
            ->where('status', 'active')
            ->get()
            ->getResult();
        
        return $data;
    }  
}

?>