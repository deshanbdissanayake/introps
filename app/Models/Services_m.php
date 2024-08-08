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
        $service = $builder->select('*')->where('s_id', $s_id)->get()->getRow();

        $builder2 = $this->db->table('portfolio');
        $portfolio = $builder2->select('*')->where('ref_type', 'services')->where('ref_no', $s_id)->get()->getResult();

        // Print the result and exit
        print_r($portfolio);
        exit;

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
            'prev_work' => [
                [
                    'image_path' => '/assets/images/mockup-01.jpg',
                    'project_path' => 'https://goo.gl/ZMxnYs',
                    'title' => 'Holy Crab Delivery',
                    'subtitle' => 'Lorem ipsum dolor sit amet consectetur'
                ],
                [
                    'image_path' => '/assets/images/mockup-02.jpg',
                    'project_path' => 'https://goo.gl/ZMxnYs',
                    'title' => 'Holy Crab Delivery',
                    'subtitle' => 'Lorem ipsum dolor sit amet consectetur'
                ],
                [
                    'image_path' => '/assets/images/mockup-03.jpg',
                    'project_path' => 'https://goo.gl/ZMxnYs',
                    'title' => 'Holy Crab Delivery',
                    'subtitle' => 'Lorem ipsum dolor sit amet consectetur'
                ],
                [
                    'image_path' => '/assets/images/mockup-04.jpg',
                    'project_path' => 'https://goo.gl/ZMxnYs',
                    'title' => 'Holy Crab Delivery',
                    'subtitle' => 'Lorem ipsum dolor sit amet consectetur'
                ],
                [
                    'image_path' => '/assets/images/mockup-05.jpg',
                    'project_path' => 'https://goo.gl/ZMxnYs',
                    'title' => 'Holy Crab Delivery',
                    'subtitle' => 'Lorem ipsum dolor sit amet consectetur'
                ],
                [
                    'image_path' => '/assets/images/mockup-06.jpg',
                    'project_path' => 'https://goo.gl/ZMxnYs',
                    'title' => 'Holy Crab Delivery',
                    'subtitle' => 'Lorem ipsum dolor sit amet consectetur'
                ]
            ]
            
        ];
        
        $data['pricing'] = [
            'title' => $service->s_pricing_title,
            'subtitle' => $service->s_pricing_desc,
            'packages' => [
                [
                    'package_id' => '1',
                    'package_name' => 'Starter',
                    'package_price' => '27000',
                    'package_fav' => '0',
                    'features' => [
                        [
                            'f_id' => '1',
                            'f_desc' => 'Upto 3 Web pages', 
                            'f_type' => 'main' //main & common
                        ],
                        [
                            'f_id' => '2',
                            'f_desc' => 'Google Maps', 
                            'f_type' => 'main' //main & common
                        ],
                        [
                            'f_id' => '3',
                            'f_desc' => 'WhatsApp integration', 
                            'f_type' => 'main' //main & common
                        ],
                        [
                            'f_id' => '4',
                            'f_desc' => '2 social media post', 
                            'f_type' => 'main' //main & common
                        ],
                        [
                            'f_id' => '5',
                            'f_desc' => 'Server/ Hosting Free', 
                            'f_type' => 'common' //main & common
                        ],
                        [
                            'f_id' => '6',
                            'f_desc' => 'SSL Certificate Free', 
                            'f_type' => 'common' //main & common
                        ],
                        [
                            'f_id' => '7',
                            'f_desc' => 'Domain for 1 year Free', 
                            'f_type' => 'common' //main & common
                        ],
                    ],
                ],
                [
                    'package_id' => '2',
                    'package_name' => 'Standard',
                    'package_price' => '38000',
                    'package_fav' => '1',
                    'features' => [
                        [
                            'f_id' => '1',
                            'f_desc' => 'Upto 3 Web pages', 
                            'f_type' => 'main' //main & common
                        ],
                        [
                            'f_id' => '2',
                            'f_desc' => 'Google Maps', 
                            'f_type' => 'main' //main & common
                        ],
                        [
                            'f_id' => '3',
                            'f_desc' => 'WhatsApp integration', 
                            'f_type' => 'main' //main & common
                        ],
                        [
                            'f_id' => '4',
                            'f_desc' => '2 social media post', 
                            'f_type' => 'main' //main & common
                        ],
                        [
                            'f_id' => '5',
                            'f_desc' => 'Server/ Hosting Free', 
                            'f_type' => 'common' //main & common
                        ],
                        [
                            'f_id' => '6',
                            'f_desc' => 'SSL Certificate Free', 
                            'f_type' => 'common' //main & common
                        ],
                        [
                            'f_id' => '7',
                            'f_desc' => 'Domain for 1 year Free', 
                            'f_type' => 'common' //main & common
                        ],
                    ],
                ],
                [
                    'package_id' => '1',
                    'package_name' => 'Premium',
                    'package_price' => 'Custom',
                    'package_fav' => '0',
                    'features' => [
                        [
                            'f_id' => '1',
                            'f_desc' => 'Upto 3 Web pages', 
                            'f_type' => 'main' //main & common
                        ],
                        [
                            'f_id' => '2',
                            'f_desc' => 'Google Maps', 
                            'f_type' => 'main' //main & common
                        ],
                        [
                            'f_id' => '3',
                            'f_desc' => 'WhatsApp integration', 
                            'f_type' => 'main' //main & common
                        ],
                        [
                            'f_id' => '4',
                            'f_desc' => '2 social media post', 
                            'f_type' => 'main' //main & common
                        ],
                        [
                            'f_id' => '5',
                            'f_desc' => 'Server/ Hosting Free', 
                            'f_type' => 'common' //main & common
                        ],
                        [
                            'f_id' => '6',
                            'f_desc' => 'SSL Certificate Free', 
                            'f_type' => 'common' //main & common
                        ],
                        [
                            'f_id' => '7',
                            'f_desc' => 'Domain for 1 year Free', 
                            'f_type' => 'common' //main & common
                        ],
                    ],
                ],
            ]
        ];

        return $data;
    }
}
