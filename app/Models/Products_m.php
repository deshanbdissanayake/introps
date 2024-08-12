<?php

namespace App\Models;

use CodeIgniter\Model;

class Services_m extends Model
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
            'p_can' => "https://introps.com/services",
            'p_title' => "Introps IT - Global Enterprise Software Solution Provider.",
            'p_des' => "Invigo is a web-based invoicing and inventory management system that helps businesses streamline operations, manage stock in real-time, issue customizable invoices, and gain valuable insights with advanced reporting and analytics. Access your business data securely from anywhere with Invigo.",
            'p_key' => "Invigo, web-based invoicing system, inventory management, stock management, customizable invoices, real-time stock updates, automated invoicing, sales reports, customer relationship management, CRM, cloud-based access, secure data, business automation, multi-currency support, tax reports, integration, customization, responsive design"
        ];

        $service = $this->db->table('services')->select('*')->where('s_id', $s_id)->where('status', 'active')->get()->getRow();

        if($service){
            $portfolio = $this->db->table('portfolio')->select('*')->where('ref_type', 'services')->where('ref_no', $s_id)->where('status', 'active')->get()->getResult();
    
            $packages = $this->db->table('packages')->select('*')->where('ref_type', 'services')->where('ref_no', $s_id)->where('status', 'active')->get()->getResult();
    
            foreach($packages as $package){
                $package->features = $this->db->table('package_features')->select('*')->where('pkg_id', $package->pkg_id)->where('status', 'active')->get()->getResult();
            }
    
            $data['home'] = [
                'title' => $service->s_title,
                'subtitle' => $service->s_subtitle,
                'bgimage' => $service->s_bgimage
            ];
    
            $data['intro'] = [
                'title' => $service->s_intro_title,
                'desc' => $service->s_intro_desc
            ];
    
            $data['work'] = [
                'title' => $service->s_work_title,
                'subtitle' => $service->s_work_desc,
                'prev_work' => $portfolio
                
            ];
            
            $data['pricing'] = [
                'title' => $service->s_pricing_title,
                'subtitle' => $service->s_pricing_desc,
                'show_price' => $service->show_price,
                'packages' => $packages
            ];
        }
        
        return $data;
    }
}
