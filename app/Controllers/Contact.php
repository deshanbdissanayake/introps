<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index(): string
    {
        $a["p_title"] = "Contact Us";
        $a["p_des"] = "Get in touch with us.";
        $a["p_key"] = "contact us, reach out, support";

        $output = view('header', $a);
        $output .= view('contact');
        $output .= view('footer');

        return $output;
    }
}
