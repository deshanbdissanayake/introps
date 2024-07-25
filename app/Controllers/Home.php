<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // Load and concatenate the views
        $output = view('header');
        $output .= view('introps/web/home');
        $output .= view('introps/web/process');
        $output .= view('introps/web/introduction');
        $output .= view('introps/web/our_work');
        $output .= view('introps/web/pricing');
        $output .= view('introps/web/clients');
        $output .= view('introps/web/get_started');
        $output .= view('footer');
    
        // Return the concatenated views
        return $output;
 
        
    }
}
