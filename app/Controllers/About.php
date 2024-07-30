<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        $a["p_title"] = "About Us";
        $a["p_des"] = "Information about our company.";
        $a["p_key"] = "about us, company information";

        $output = view('header', $a);
        $output .= view('about/index');
        $output .= view('footer');

        return $output;
    }

    public function team(): string
    {
        $a["p_title"] = "Our Team";
        $a["p_des"] = "Meet our team.";
        $a["p_key"] = "team, staff, employees";

        $output = view('header', $a);
        $output .= view('about/team');
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
}
