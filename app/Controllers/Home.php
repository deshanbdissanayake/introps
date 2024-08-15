<?php

namespace App\Controllers;

use App\Models\Blog_m;
use CodeIgniter\Controller;

class Home extends BaseController
{
    protected $blogModel;

    public function __construct() {
        $this->blogModel = new Blog_m();
    }

    public function index(): string
    {
        $a["p_can"] = "http://invlanding.introps.com/";
        $a["p_title"] = "Introps IT - Global Enterprise Software Solution Provider.";
        $a["p_des"] = "Invigo is a web-based invoicing and inventory management system that helps businesses streamline operations, manage stock in real-time, issue customizable invoices, and gain valuable insights with advanced reporting and analytics. Access your business data securely from anywhere with Invigo.";  // 20words
        $a["p_key"] = "Invigo, web-based invoicing system, inventory management, stock management, customizable invoices, real-time stock updates, automated invoicing, sales reports, customer relationship management, CRM, cloud-based access, secure data, business automation, multi-currency support, tax reports, integration, customization, responsive design";

        $data['blogs'] = $this->blogModel->getBlogs(2);

        // Load and concatenate the views
        $output = view('header', $a);
        $output .= view('home');
        $output .= view('services');
        $output .= view('why_choose_us');
        $output .= view('our_work');
        $output .= view('blog/blog_list', $data);
        //$output .= view('introps/counter');
        //$output .= view('how_we_work');
        $output .= view('process');  
        //$output .= view('introps/customers_say');
        //$output .= view('introps/faq');
        $output .= view('clients');
        //$output .= view('contact');
        $output .= view('footer');

        // Return the concatenated views
        return $output;
    }

}
