<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/router/router.php");

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
get('/', 'controllers/get_home.php');
get('/home', 'controllers/get_home.php');

//SHOP ROUTES
get('/shop', 'controllers/get_shop.php');

//CONTACT ROUTES
get('/contact', 'controllers/get_contact.php');

//SINGLE_PRODUCTS
get('/single_product/product_id/$id', 'controllers/get_single_product.php');

//CART ROUTES
post('/cart', 'controllers/cart.php');
get('/cart', 'controllers/cart.php');



// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','view/404.php');
