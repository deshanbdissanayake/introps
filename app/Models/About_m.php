<?php

namespace App\Models;

use CodeIgniter\Model;

class About_m extends Model
{

    public function getDepartments(){
        $builder = $this->db->table('department')
            ->select('*')
            ->where('status', 'active');
        $res = $builder->get()->getResult();
        return $res;
    }

    public function getTeamData(){
        $builder = $this->db->table('team')
            ->select('*')
            ->where('status', 'active');
        $res = $builder->get()->getResult();
        return $res;
    }

}

?>