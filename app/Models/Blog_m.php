<?php

namespace App\Models;

use CodeIgniter\Model;

class Blog_m extends Model
{

    public function getBlogs($limit) {
        $builder = $this->db->table('blog');
        if ($limit !== 'all') {
            $builder->limit($limit);
        }
        $builder->select('blog_id, title, image, published_by, publish_date, short_desc')
            ->where('status', 'active');
        $res = $builder->get()->getResult();
        return $res;
    }    

    public function getBlogById($blog_id){
        $builder = $this->db->table('blog')
            ->select('*, DATE(publish_date) publish_date')
            ->where('status', 'active')
            ->where('blog_id', $blog_id);
        $res = $builder->get()->getRow();
        return $res;
    }

}

?>