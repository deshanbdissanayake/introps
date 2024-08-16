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
$routes->get('portfolio/get_tags', 'Portfolio::getAllTags');
$routes->get('portfolio/get_portfolio_tags', 'Portfolio::getPortfolioTags');
$routes->get('portfolio/get_port', 'Portfolio::getAllPortfolioData');
$routes->get('portfolio/get_port_by_id/(:num)', 'Portfolio::getPortfolioByTagId/$1');

// Introps Routes
$routes->get('/introps/about', 'About::company');
$routes->get('/introps/team', 'About::team');
$routes->get('/introps/careers', 'About::careers');
$routes->get('/terms_and_conditions', 'About::terms');
$routes->get('/privacy_policy', 'About::policy');

// Blog Route
$routes->get('/blog', 'Blog::index');
$routes->get('blog/post/(:num)', 'Blog::single/$1');

// Additional default routes
$routes->get('/', 'Home::index'); // Default route if needed
