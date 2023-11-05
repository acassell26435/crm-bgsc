<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(static function () {
    echo view('components/pages/error/page-error-404');
});
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.dd
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');
$routes->get('/', 'W3crmAdmin::index');
$routes->get('index', 'W3crmAdmin::index');
$routes->get('index_2', 'W3crmAdmin::index_2');
$routes->get('employee', 'W3crmAdmin::employee');
$routes->get('/core_hr', 'W3crmAdmin::core_hr');
$routes->get('/finance', 'W3crmAdmin::finance');
$routes->get('/task', 'W3crmAdmin::task');
$routes->get('/task_summary', 'W3crmAdmin::task_summary');
$routes->get('/performance', 'W3crmAdmin::performance');
$routes->get('/project', 'W3crmAdmin::project');
$routes->get('/reports', 'W3crmAdmin::reports');
$routes->get('/manage_clients', 'W3crmAdmin::manage_clients');
$routes->get('/blog_1', 'W3crmAdmin::blog_1');
$routes->get('/svg_icon', 'W3crmAdmin::svg_icon');
/* Dashboard END */

/* AIkit start */
$routes->get('/auto_write', 'W3crmAdmin::auto_write');
$routes->get('/chatbot', 'W3crmAdmin::chatbot');
$routes->get('/fine_tune_models', 'W3crmAdmin::fine_tune_models');
$routes->get('/import', 'W3crmAdmin::import');
$routes->get('/prompt', 'W3crmAdmin::prompt');
$routes->get('/repurpose', 'W3crmAdmin::repurpose');
$routes->get('/rss', 'W3crmAdmin::rss');
$routes->get('/scheduled', 'W3crmAdmin::scheduled');
$routes->get('/setting', 'W3crmAdmin::setting');
/* AIkit END */

/* CMS start */
$routes->get('/content', 'W3crmAdmin::content');
$routes->get('/add_content', 'W3crmAdmin::add_content');
$routes->get('/menu', 'W3crmAdmin::menu');
$routes->get('/email_template', 'W3crmAdmin::email_template');
$routes->get('/add_email', 'W3crmAdmin::add_email');
$routes->get('/blog', 'W3crmAdmin::blog');
$routes->get('/add_blog', 'W3crmAdmin::add_blog');
$routes->get('/blog_category', 'W3crmAdmin::blog_category');
/* CMS END */

/* Apps start */
$routes->get('/chat', 'W3crmAdmin::chat');
$routes->get('/user', 'W3crmAdmin::user');
$routes->get('/user_roles', 'W3crmAdmin::user_roles');
$routes->get('/app_profile_1', 'W3crmAdmin::app_profile_1');
$routes->get('/app_profile_2', 'W3crmAdmin::app_profile_2');
$routes->get('/edit_profile', 'W3crmAdmin::edit_profile');
$routes->get('/post_details', 'W3crmAdmin::post_details');
$routes->get('/customer', 'W3crmAdmin::customer');
$routes->get('/customer_profile', 'W3crmAdmin::customer_profile');
$routes->get('/contacts', 'W3crmAdmin::contacts');
$routes->get('/email_compose', 'W3crmAdmin::email_compose');
$routes->get('/email_inbox', 'W3crmAdmin::email_inbox');
$routes->get('/email_read', 'W3crmAdmin::email_read');
$routes->get('/app_calendar', 'W3crmAdmin::app_calendar');
$routes->get('/ecom_product_grid', 'W3crmAdmin::ecom_product_grid');
$routes->get('/ecom_product_list', 'W3crmAdmin::ecom_product_list');
$routes->get('/ecom_product_details', 'W3crmAdmin::ecom_product_details');
$routes->get('/ecom_product_order', 'W3crmAdmin::ecom_product_order');
$routes->get('/ecom_checkout', 'W3crmAdmin::ecom_checkout');
$routes->get('/ecom_invoice', 'W3crmAdmin::ecom_invoice');
$routes->get('/ecom_customers', 'W3crmAdmin::ecom_customers');
/* Apps END */


/* Charts start */
$routes->get('/flot', 'W3crmAdmin::flot');
$routes->get('/morris', 'W3crmAdmin::morris');
$routes->get('/chartjs', 'W3crmAdmin::chartjs');
$routes->get('/chartist', 'W3crmAdmin::chartist');
$routes->get('/sparkline', 'W3crmAdmin::sparkline');
$routes->get('/peity', 'W3crmAdmin::peity');
/* Charts END */


/* Components start */

/* Bootstrap start */
$routes->get('accordion', 'W3crmAdmin::accordion');
$routes->get('alert', 'W3crmAdmin::alert');
$routes->get('badge', 'W3crmAdmin::badge');
$routes->get('button', 'W3crmAdmin::button');
$routes->get('modal', 'W3crmAdmin::modal');
$routes->get('button_group', 'W3crmAdmin::button_group');
$routes->get('list_group', 'W3crmAdmin::list_group');
$routes->get('media_object', 'W3crmAdmin::media_object');
$routes->get('card', 'W3crmAdmin::card');
$routes->get('carousel', 'W3crmAdmin::carousel');
$routes->get('dropdown', 'W3crmAdmin::dropdown');
$routes->get('popover', 'W3crmAdmin::popover');
$routes->get('progressbar', 'W3crmAdmin::progressbar');
$routes->get('tab', 'W3crmAdmin::tab');
$routes->get('typography', 'W3crmAdmin::typography');
$routes->get('pagination', 'W3crmAdmin::pagination');
$routes->get('grid', 'W3crmAdmin::grid');
/* Bootstrap END */

/* Plugins start */
$routes->get('select2', 'W3crmAdmin::select2');
$routes->get('nestable', 'W3crmAdmin::nestable');
$routes->get('noui_slider', 'W3crmAdmin::noui_slider');
$routes->get('sweetalert', 'W3crmAdmin::sweetalert');
$routes->get('toastr', 'W3crmAdmin::toastr');
$routes->get('map_jqvmap', 'W3crmAdmin::map_jqvmap');
$routes->get('lightgallery', 'W3crmAdmin::lightgallery');
/* Plugins END */

/* Widget Start */
$routes->get('widget_basic', 'W3crmAdmin::widget_basic');
/* Widget END */


/* Forms start */
$routes->get('form_element', 'W3crmAdmin::form_element');
$routes->get('form_wizard', 'W3crmAdmin::form_wizard');
$routes->get('form_ckeditor', 'W3crmAdmin::form_ckeditor');
$routes->get('form_pickers', 'W3crmAdmin::form_pickers');
$routes->get('form_validation_jquery', 'W3crmAdmin::form_validation_jquery');
/* Forms END */

/* Table start */
$routes->get('table_bootstrap', 'W3crmAdmin::table_bootstrap');
$routes->get('table_datatable', 'W3crmAdmin::table_datatable');
/* Table END */


/* Pages start */
$routes->get('page_register', 'W3crmAdmin::page_register');
$routes->get('page_login', 'W3crmAdmin::page_login');
$routes->get('page_forgot_password', 'W3crmAdmin::page_forgot_password');
$routes->get('page_empty', 'W3crmAdmin::page_empty');
$routes->get('page_lock_screen', 'W3crmAdmin::page_lock_screen');
$routes->get('page_error_400', 'W3crmAdmin::page_error_400');
$routes->get('page_error_403', 'W3crmAdmin::page_error_403');
$routes->get('page_error_404', 'W3crmAdmin::page_error_404');
$routes->get('page_error_500', 'W3crmAdmin::page_error_500');
$routes->get('page_error_503', 'W3crmAdmin::page_error_503');
/* Pages END */

/* Components END */

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
