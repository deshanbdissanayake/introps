<?php

namespace App\Controllers;

class Products extends BaseController
{
    public function index(): string
    {
        $a["p_title"] = "Invigo";
        $a["p_des"] = "Description of Invigo.";
        $a["p_key"] = "Invigo, invoicing, inventory management";

        $output = view('header', $a);
        $output .= view('products/invigo');
        $output .= view('footer');

        return $output;
    }

    public function product($productId): string
    {
        $a["p_can"] = "https://introps.com/services"; 
        $a["p_title"] = "iRest";
        $a["p_des"] = "Description of iRest.";
        $a["p_key"] = "iRest, restaurant management, POS system";

        $output = view('header', $a);
        $output .= view('products/home');
        $output .= view('products/screenshot');
        $output .= view('products/services');
        $output .= view('products/pricing');
        $output .= view('products/testimonials');
        $output .= view('contact_card');
        $output .= view('footer');

        return $output;
    }
}
