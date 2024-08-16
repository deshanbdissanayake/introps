<?php

namespace App\Controllers;

use App\Models\About_m;
use CodeIgniter\Controller;

class About extends BaseController
{
    protected $aboutModel;

    public function __construct() {
        $this->aboutModel = new About_m();
    }

    public function company(): string
    {
        $a["p_title"] = "About Us";
        $a["p_des"] = "Information about our company.";
        $a["p_key"] = "about us, company information";

        $output = view('header', $a);
        $output .= view('about/company');
        $output .= view('contact_card');
        $output .= view('footer');

        return $output;
    }

    public function team(): string
    {
        $a["p_title"] = "Our Team";
        $a["p_des"] = "Meet our team.";
        $a["p_key"] = "team, staff, employees";

        $data['team'] = $this->aboutModel->getTeamData();
        $data['deps'] = $this->aboutModel->getDepartments();

        $output = view('header', $a);
        $output .= view('about/team', $data);
        $output .= view('footer');

        return $output;
    }

    public function careers(): string
    {
        $a["p_title"] = "Careers";
        $a["p_des"] = "Join our team.";
        $a["p_key"] = "careers, job openings, employment";

        $output = view('header', $a);
        $output .= view('about/careers');
        $output .= view('footer');

        return $output;
    }

    public function testimonials(): string
    {
        $a["p_title"] = "Testimonials";
        $a["p_des"] = "What our clients say.";
        $a["p_key"] = "testimonials, reviews, client feedback";

        $output = view('header', $a);
        $output .= view('about/testimonials');
        $output .= view('footer');

        return $output;
    }

    public function terms(): string
    {
        $a["p_title"] = "Terms & Conditions";
        $a["p_des"] = "What our clients say.";
        $a["p_key"] = "testimonials, reviews, client feedback";

        $output = view('header', $a);
        $output .= view('about/terms');
        $output .= view('footer');

        return $output;
    }

    public function policy(): string
    {
        $a["p_title"] = "Privacy Policy";
        $a["p_des"] = "What our clients say.";
        $a["p_key"] = "testimonials, reviews, client feedback";

        $output = view('header', $a);
        $output .= view('about/policy');
        $output .= view('footer');

        return $output;
    }
}
