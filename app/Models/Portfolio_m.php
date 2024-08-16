<?php

namespace App\Models;

use CodeIgniter\Model;

class Portfolio_m extends Model {

    public function getAllPortfolioData() {
        $builder = $this->db->table('portfolio')
            ->select('*')
            ->where('portfolio_view', 1)
            ->where('status', 'active');
        $res = $builder->get()->getResult();
        
        foreach ($res as &$re) {
            $re->tags = $this->getTagByPortfolioId($re->port_id);
        }
        
        return $res;
    }
    
    public function getAllTags() {
        $builder = $this->db->table('tags')
            ->select('tags.*')
            ->where('status', 'active');
        $res = $builder->get()->getResult();
        return $res;
    }
    
    public function getPortfolioTags() {
        $builder = $this->db->table('tags')
            ->select('tags.*')
            ->where('portfolio_tags', 1)
            ->where('status', 'active');
        $res = $builder->get()->getResult();
        return $res;
    }
    
    
    public function getTagByPortfolioId($port_id) {
        $builder = $this->db->table('portfolio_tags')
            ->join('tags', 'tags.tag_id = portfolio_tags.tag_id', 'left')
            ->select('tags.*')
            ->where('portfolio_tags.port_id', $port_id)
            ->where('portfolio_tags.status', 'active')
            ->where('tags.status', 'active');
        $res = $builder->get()->getResult();
        return $res;
    }
    
    public function getPortfolioByTagId($tag_id) {
        $builder = $this->db->table('portfolio_tags')
            ->join('portfolio', 'portfolio.port_id = portfolio_tags.port_id', 'left')
            ->select('portfolio.*, portfolio_tags.tag_id')
            ->where('portfolio_tags.tag_id', $tag_id)
            ->where('portfolio_tags.status', 'active')
            ->where('portfolio.status', 'active');
        $res = $builder->get()->getResult();
        return $res;
    }
}
?>
