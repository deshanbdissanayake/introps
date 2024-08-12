<?php

namespace App\Models;

use CodeIgniter\Model;

class Products_m extends Model
{
    public function getAllProducts() {
        $data = $this->db->table('products')
            ->select('*')
            ->where('status', 'active')
            ->get()
            ->getResult();
        
        return $data;
    }    

    public function getProductByProductId($pro_id){
        $data['seo'] = [
            'p_can' => "https://introps.com/products",
            'p_title' => "Introps IT - Global Enterprise Software Solution Provider.",
            'p_des' => "Invigo is a web-based invoicing and inventory management system that helps businesses streamline operations, manage stock in real-time, issue customizable invoices, and gain valuable insights with advanced reporting and analytics. Access your business data securely from anywhere with Invigo.",
            'p_key' => "Invigo, web-based invoicing system, inventory management, stock management, customizable invoices, real-time stock updates, automated invoicing, sales reports, customer relationship management, CRM, cloud-based access, secure data, business automation, multi-currency support, tax reports, integration, customization, responsive design"
        ];
        
        $product = $this->db->table('products')->select('*')->where('pro_id', $pro_id)->where('status', 'active')->get()->getRow();

        if (!$product) {
            return []; // Return an empty array if no product is found
        }

        if($product){
            $screenshots = $this->db->table('product_screenshots')->select('*')->where('pro_id', $pro_id)->where('status', 'active')->get()->getResult();
    
            $packages = $this->db->table('packages')->select('*')->where('ref_type', 'products')->where('ref_no', $pro_id)->where('status', 'active')->get()->getResult();

            $features = $this->db->table('product_features')->select('*')->where('pro_id', $pro_id)->where('status', 'active')->get()->getResult();
    
            if($packages){
                foreach($packages as $package){
                    $package->features = $this->db->table('package_features')->select('*')->where('pkg_id', $package->pkg_id)->where('status', 'active')->get()->getResult();
                }
            }
    
            $data['home'] = [
                'home_title'       => $product->home_title ?? '',
                'home_subtitle'    => $product->home_desc ?? '',
                'home_bgimage'     => $product->home_bgimage ?? '',
                'home_path'        => $product->home_path ?? '',
                'home_video_link'  => $product->home_video_link ?? '',
            ];
    
            $data['features'] = [
                'feature_title'       => $product->features_title ?? '',
                'feature_subtitle'    => $product->features_desc ?? '',
                'features' => $features,
            ];
    
            $data['testimonials'] = [
                'testi_title'       => $product->testimonials_title ?? '',
                'testi_subtitle'    => $product->testimonials_desc ?? '',
            ];
    
            $data['screenshots'] = [
                'ss_title'       => $product->intro_title ?? '',
                'ss_desc'        => $product->intro_desc ?? '',
                'ss_prev_work'   => $screenshots
            ];
            
            $data['pricing'] = [
                'price_title'       => $product->pricing_title ?? '',
                'price_subtitle'    => $product->pricing_desc ?? '',
                'price_show_price'  => $product->show_price ?? 1,
                'price_packages'    => $packages
            ];
        }
        
        return $data;
    }
}
