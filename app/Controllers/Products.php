<?php

namespace App\Controllers;

use App\Models\Products_m;
use CodeIgniter\Controller;

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
        $a["p_can"] = "https://introps.com/product"; 
        $a["p_title"] = "iRest";
        $a["p_des"] = "Description of iRest.";
        $a["p_key"] = "iRest, restaurant management, POS system";

        // Load the model
        $productsModel = new Products_m();
        $data = $productsModel->getProductByProductId($productId);
        // Check if product data is retrieved
        if (!$data) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Product with ID $productId not found");
        }

        $output = view('header', $data['seo']);
        $output .= view('products/home', $data['home']);
        $output .= view('products/screenshot', $data['screenshots']);
        if($data['features']['show_features']){
            $output .= view('products/features', $data['features']);
        }
        if($data['pricing']['price_show_price']){
            $output .= view('products/pricing', $data['pricing']);
        }
        if($data['testimonials']['show_testimonials']){
            $output .= view('products/testimonials', $data['testimonials']);
        }
        $output .= view('contact_card');
        $output .= view('footer');

        return $output;
    }
}
