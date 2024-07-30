<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index(): string
    {
        $a["p_title"] = "Blog";
        $a["p_des"] = "Latest news and updates.";
        $a["p_key"] = "blog, news, updates";

        $output = view('header', $a);
        $output .= view('blog');
        $output .= view('footer');

        return $output;
    }
}
