<?php 
define('APPROOT', dirname(dirname(__FILE__)));
define('URLROOT', 'http://localhost/f3-monkey/');
define('FRONTEND_HEADER', APPROOT.'/views/frontend/includes/header.php');
define('FRONTEND_FOOTER', APPROOT.'/views/frontend/includes/footer.php');
define('CATEGORY_LIST', APPROOT.'/views/frontend/includes/category_list.php');
define('PRODUCT_PAGINATION', APPROOT.'/views/frontend/includes/product_pagination.php');


define('HEADER', APPROOT.'/views/backend/includes/header.php');
define('FOOTER', APPROOT.'/views/backend/includes/footer.php');
define('NAVBAR', APPROOT.'/views/backend/includes/navbar.php');
define('SIDEBAR', APPROOT.'/views/backend/includes/sidebar.php');

define('SESSION', APPROOT.'/session.php');

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'f3_monkey');