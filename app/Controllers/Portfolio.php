<?php

namespace App\Controllers;

use App\Models\Portfolio_m;
use CodeIgniter\Controller;

class Portfolio extends Controller
{
    protected $portfolioModel;

    public function __construct() {
        $this->portfolioModel = new Portfolio_m();
    }

    public function index(): string
    {
        $a = [
            "p_title" => "Portfolio",
            "p_des" => "Overview of our portfolio.",
            "p_key" => "portfolio, case studies, projects"
        ];
        
        $output = view('header', $a);
        $output .= view('portfolio');
        $output .= view('footer');

        return $output;

    }

    public function getAllPortfolioData() {
        $data = $this->portfolioModel->getAllPortfolioData();
        return $this->response->setJSON($data);
    }

    public function getAllTags() {
        $data = $this->portfolioModel->getAllTags();
        return $this->response->setJSON($data);
    }

    public function getTagByPortfolioId($port_id) {
        $data = $this->portfolioModel->getTagByPortfolioId($port_id);
        return $this->response->setJSON($data);
    }

    public function getPortfolioByTagId($tag_id) {
        $data = $this->portfolioModel->getPortfolioByTagId($tag_id);
        return $this->response->setJSON($data);
    }
}

?>
