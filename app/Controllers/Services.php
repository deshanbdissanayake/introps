<?php

namespace App\Controllers;

use App\Models\Services_m;
use CodeIgniter\Controller;

class Services extends Controller
{
    public function index(): string
    {
        $serviceId = $this->request->getGet('s');

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
        $output .= view('services/pricing', $data['pricing']);
        //$output .= view('services/clients');
        //$output .= view('services/get_started');
        //$output .= view('services/common/contact');
        $output .= view('footer');

        // Return the concatenated views
        return $output;
    }
}
