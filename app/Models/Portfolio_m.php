<?php

namespace App\Models;

use CodeIgniter\Model;

class Portfolio_m extends Model {

    protected $table = 'portfolio';
    protected $primaryKey = 'port_id';
    protected $allowedFields = ['status'];

    public function getAllPortfolioData() {
        $res = $this->where('status', 'active')->findAll();
        
        foreach ($res as &$re) { // use reference to modify array elements directly
            $re['tags'] = $this->getTagByPortfolioId($re['port_id']);
        }
        
        return $res;
    }
    
    public function getAllTags() {
        $builder = $this->db->table('portfolio_tags')
            ->join('tags', 'tags.tag_id = portfolio_tags.tag_id', 'left')
            ->select('tags.*') // Adjust select to avoid column conflicts
            ->where('tags.status', 'active');
        $res = $builder->get()->getResult();
        return $res;
    }
    
    public function getTagByPortfolioId($port_id) {
        $builder = $this->db->table('portfolio_tags')
            ->join('tags', 'tags.tag_id = portfolio_tags.tag_id', 'left')
            ->select('tags.*') // Adjust select to avoid column conflicts
            ->where('portfolio_tags.port_id', $port_id)
            ->where('portfolio_tags.status', 'active')
            ->where('tags.status', 'active');
        $res = $builder->get()->getResult();
        return $res;
    }
    
    public function getPortfolioByTagId($tag_id) {
        $builder = $this->db->table('portfolio_tags')
            ->join('portfolio', 'portfolio.port_id = portfolio.port_id', 'left')
            ->select('portfolio.*, portfolio_tags.tag_id') // Adjust select to avoid column conflicts
            ->where('portfolio_tags.tag_id', $tag_id)
            ->where('portfolio_tags.status', 'active')
            ->where('portfolio.status', 'active');
        $res = $builder->get()->getResult();
        return $res;
    }
}
?>
