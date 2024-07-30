<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function erp(): string
    {
        $a["p_can"] = "http://invlanding.introps.com/";
        $a["p_title"] = "Introps IT - Global Enterprise Software Solution Provider.";
        $a["p_des"] = "Invigo is a web-based invoicing and inventory management system that helps businesses streamline operations, manage stock in real-time, issue customizable invoices, and gain valuable insights with advanced reporting and analytics. Access your business data securely from anywhere with Invigo.";
        $a["p_key"] = "Invigo, web-based invoicing system, inventory management, stock management, customizable invoices, real-time stock updates, automated invoicing, sales reports, customer relationship management, CRM, cloud-based access, secure data, business automation, multi-currency support, tax reports, integration, customization, responsive design";

        // Load and concatenate the views
        $output = view('header', $a);
        $output .= view('home');
        $output .= view('services/erp');
        $output .= view('footer');

        // Return the concatenated views
        return $output;
    }

    public function web(): string
    {
        // Similar setup as `erp` method
        $a["p_title"] = "Web Development Services";
        $a["p_des"] = "Detailed description of web development services.";
        $a["p_key"] = "web development, custom websites, CMS, e-commerce, responsive design, SEO optimization";

        $output = view('header', $a);
        $output .= view('home');
        $output .= view('services/web');
        $output .= view('footer');

        return $output;
    }

    public function mobile(): string
    {
        // Similar setup as `erp` method
        $a["p_title"] = "Mobile App Development";
        $a["p_des"] = "Detailed description of mobile app development services.";
        $a["p_key"] = "mobile app development, iOS, Android, cross-platform apps, user experience, app design";

        $output = view('header', $a);
        $output .= view('home');
        $output .= view('services/mobile');
        $output .= view('footer');

        return $output;
    }

    public function seo(): string
    {
        // Similar setup as `erp` method
        $a["p_title"] = "SEO Services";
        $a["p_des"] = "Detailed description of SEO services.";
        $a["p_key"] = "SEO, search engine optimization, keyword research, on-page SEO, off-page SEO, link building";

        $output = view('header', $a);
        $output .= view('home');
        $output .= view('services/seo');
        $output .= view('footer');

        return $output;
    }
}
