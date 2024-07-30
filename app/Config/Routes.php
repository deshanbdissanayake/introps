<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Services Routes
$routes->get('/services/erp', 'Services::erp');
$routes->get('/services/web', 'Services::web');
$routes->get('/services/mobile', 'Services::mobile');
$routes->get('/services/seo', 'Services::seo');

// Products Routes
$routes->get('/products/invigo', 'Products::invigo');
$routes->get('/products/irest', 'Products::irest');
$routes->get('/products/isales', 'Products::isales');

// Portfolio Route
$routes->get('/portfolio', 'Portfolio::index');

// About Us Routes
$routes->get('/introps/about', 'About::index');
$routes->get('/introps/team', 'About::team');
$routes->get('/introps/careers', 'About::careers');
$routes->get('/introps/testimonials', 'About::testimonials');

// Blog Route
$routes->get('/blog', 'Blog::index');

// Contact Route
$routes->get('/introps/contact', 'Contact::index');

// Additional default routes
$routes->get('/', 'Home::index'); // Default route if needed
