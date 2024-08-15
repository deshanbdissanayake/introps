<?php

namespace App\Controllers;

use App\Models\Blog_m;
use CodeIgniter\Controller;

class Blog extends BaseController
{
    protected $blogModel;

    public function __construct() {
        $this->blogModel = new Blog_m();
    }

    public function index(): string
    {
        $a["p_title"] = "Blog";
        $a["p_des"] = "Latest news and updates.";
        $a["p_key"] = "blog, news, updates";

        $data['blogs'] = $this->blogModel->getBlogs('all');

        $output = view('header', $a);
        $output .= view('blog/blog_list', $data);
        $output .= view('footer');

        return $output;
    }

    public function single($blog_id): string
    {
        $a["p_title"] = "Blog";
        $a["p_des"] = "Latest news and updates.";
        $a["p_key"] = "blog, news, updates";

        $data['blog'] = $this->blogModel->getBlogById($blog_id);

        $output = view('header', $a);
        $output .= view('blog/blog_single', $data);
        $output .= view('footer');

        return $output;
    }


}
