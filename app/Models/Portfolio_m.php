<?php

namespace App\Models;

use CodeIgniter\Model;

class Portfolio_m extends Model{

    public function getAllPortfolioData() {
        $res = $this->db->table('portfolio')->select('*')->where('status', 'active')->get()->getResult();
        foreach ($res as $re) {
            $re->tags = $this->getTagByPortfolioId($re->port_id);
        }
        return $res;
    }
    
    public function getAllTags() {
        $res = $this->db->table('portfolio_tags')->select('*')->where('status', 'active')->get()->getResult();
        return $res;
    }
    
    public function getTagByPortfolioId($port_id) {
        $res = $this->db->table('portfolio_tags')->select('*')->where('port_id', $port_id)->where('status', 'active')->get()->getResult();
        return $res;
    }
    

}

?>