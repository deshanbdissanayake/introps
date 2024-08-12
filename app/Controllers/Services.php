<?php

namespace App\Controllers;

use App\Models\Services_m;
use CodeIgniter\Controller;

class Services extends Controller
{
    public function index(): string
    {
        // Load and concatenate the views
        $output = view('header');
        $output .= view('services/contact');
        $output .= view('footer');

        // Return the concatenated views
        return $output;
    }

    public function service($serviceId): string
    {
        // Load the model
        $servicesModel = new Services_m();
        $data = $servicesModel->getServiceByServiceId($serviceId);

        // Check if service data is retrieved
        if (!$data) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Service with ID $serviceId not found");
        }

       // print_r($data['home']);exit;

        // Load and concatenate the views
        $output = view('header', $data['seo']);
        $output .= view('services/home', $data['home']);
        $output .= view('services/introduction', $data['intro']);
        $output .= view('services/our_work', $data['work']);
        if($data['pricing']['show_price']){
            $output .= view('services/pricing', $data['pricing']);
        }
        $output .= view('contact_card');
        $output .= view('footer');

        // Return the concatenated views
        return $output;
    }
}
