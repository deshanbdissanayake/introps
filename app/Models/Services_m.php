<?php

namespace App\Models;

use CodeIgniter\Model;

class Services_m extends Model
{
    public function getAllData(){
        
    }

    public function getServiceByServiceId($s_id){
        $data['seo'] = [
            'p_can' => "https://introps.com/services",
            'p_title' => "Introps IT - Global Enterprise Software Solution Provider.",
            'p_des' => "Invigo is a web-based invoicing and inventory management system that helps businesses streamline operations, manage stock in real-time, issue customizable invoices, and gain valuable insights with advanced reporting and analytics. Access your business data securely from anywhere with Invigo.",
            'p_key' => "Invigo, web-based invoicing system, inventory management, stock management, customizable invoices, real-time stock updates, automated invoicing, sales reports, customer relationship management, CRM, cloud-based access, secure data, business automation, multi-currency support, tax reports, integration, customization, responsive design"
        ];

        $builder = $this->db->table('services');
        $service = $builder->select('*')->where('s_id', $s_id)->where('status', 'active')->get()->getRow();

        if($service){
            $builder2 = $this->db->table('portfolio');
            $portfolio = $builder2->select('*')->where('ref_type', 'services')->where('ref_no', $s_id)->where('status', 'active')->get()->getResult();
    
            $builder3 = $this->db->table('packages');
            $packages = $builder3->select('*')->where('ref_type', 'services')->where('ref_no', $s_id)->where('status', 'active')->get()->getResult();
    
            foreach($packages as $package){
                $builder4 = $this->db->table('package_features');
                $package->features = $builder4->select('*')->where('pkg_id', $package->pkg_id)->where('status', 'active')->get()->getResult();
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
                'packages' => $packages
            ];
        }
        
        return $data;
    }
}
