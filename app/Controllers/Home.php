<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $a["p_can"] = "http://invlanding.introps.com/";
        $a["p_title"] = "Invigo | web-based invoicing system, inventory management solutions";
        $a["p_des"] = "Invigo is a web-based invoicing and inventory management system that helps businesses streamline operations, manage stock in real-time, issue customizable invoices, and gain valuable insights with advanced reporting and analytics. Access your business data securely from anywhere with Invigo.";  // 20words
        $a["p_key"] = "Invigo, web-based invoicing system, inventory management, stock management, customizable invoices, real-time stock updates, automated invoicing, sales reports, customer relationship management, CRM, cloud-based access, secure data, business automation, multi-currency support, tax reports, integration, customization, responsive design";

        // Load and concatenate the views
        $output = view('header', $a);
        $output .= view('introps/home');
        $output .= view('introps/services');
        $output .= view('introps/why_choose_us');
        $output .= view('introps/our_work');
        // $output .= view('introps/counter');
        // $output .= view('introps/how_we_work');
        // $output .= view('introps/process');  
        // $output .= view('introps/customers_say');
        // $output .= view('introps/faq');
        $output .= view('introps/clients');
        $output .= view('footer');

        // Return the concatenated views
        return $output;
    }

}
