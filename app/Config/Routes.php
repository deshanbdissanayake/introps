<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Services Routes
$routes->get('/services', 'Services::index');
$routes->get('services/srv/(:num)', 'Services::service/$1');


// Contact Routes
$routes->get('/contact', 'Contact::index');

// Products Routes
$routes->get('/products', 'Products::index');
$routes->get('products/pro/(:num)', 'Products::product/$1');

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
