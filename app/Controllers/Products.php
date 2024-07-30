<?php

namespace App\Controllers;

class Products extends BaseController
{
    public function invigo(): string
    {
        $a["p_title"] = "Invigo";
        $a["p_des"] = "Description of Invigo.";
        $a["p_key"] = "Invigo, invoicing, inventory management";

        $output = view('header', $a);
        $output .= view('products/invigo');
        $output .= view('footer');

        return $output;
    }

    public function irest(): string
    {
        $a["p_title"] = "iRest";
        $a["p_des"] = "Description of iRest.";
        $a["p_key"] = "iRest, restaurant management, POS system";

        $output = view('header', $a);
        $output .= view('products/irest');
        $output .= view('footer');

        return $output;
    }

    public function isales(): string
    {
        $a["p_title"] = "iSales";
        $a["p_des"] = "Description of iSales.";
        $a["p_key"] = "iSales, sales management, CRM";

        $output = view('header', $a);
        $output .= view('products/isales');
        $output .= view('footer');

        return $output;
    }
}
