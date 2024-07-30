<?php

namespace App\Controllers;

class Portfolio extends BaseController
{
    public function index(): string
    {
        $a["p_title"] = "Portfolio";
        $a["p_des"] = "Overview of our portfolio.";
        $a["p_key"] = "portfolio, case studies, projects";

        $output = view('header', $a);
        $output .= view('portfolio');
        $output .= view('footer');

        return $output;
    }
}
