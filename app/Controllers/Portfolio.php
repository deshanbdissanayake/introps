<?php

namespace App\Controllers;

use App\Models\Portfolio_m;
use CodeIgniter\Controller;

class Portfolio extends Controller // Change from BaseController to Controller
{
    public function index(): string
    {
        $a = [
            "p_title" => "Portfolio",
            "p_des" => "Overview of our portfolio.",
            "p_key" => "portfolio, case studies, projects"
        ];

        $portModel = new Portfolio_m();
        $data['tags'] = $portModel->getAllTags(); // Fixed method call

        $output = view('header', $a);
        $output .= view('portfolio', $data);
        $output .= view('footer');

        return $output;
    }
}

?>
