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
        $builder->select('blog_id, title, image, published_by, DATE(publish_date) publish_date, short_desc')
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

        $tags = $this->db->table('blog_tags')
            ->join('tags', 'tags.tag_id = blog_tags.tag_id', 'left')
            ->select('blog_tags.tag_id, tag_name')
            ->where('blog_tags.status', 'active')
            ->where('blog_tags.blog_id', $blog_id)
            ->get()->getResult(); 
        $res->tags = $tags;

        return $res;
    }

}

?>