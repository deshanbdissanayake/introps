<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function erp(): string
    {
        // Load and concatenate the views
        $output = view('header', $a);
        $output .= view('home');
        //$output .= view('services/erp');
        $output .= view('footer');

        // Return the concatenated views
        return $output;
    }

}
