<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class W3crmAdmin extends BaseController
{
	
	/* Darshboard Controllers Start */
	
	public function index()
    {
		$action = __FUNCTION__;
		$page_title = 'Dashboard';
		return view('dashboard/index', compact('action','page_title'));
    }
	
    public function index_2()
    {
		$action = __FUNCTION__;
		$page_title = 'Dashboard Dark';
		return view('dashboard/index-2', compact('action','page_title'));
    }
	
	public function employee()
    {
		$action = __FUNCTION__;
		$page_title = 'Employee';
		return view('dashboard/employee', compact('action','page_title'));
    }
	
	public function core_hr()
    {
		$action = __FUNCTION__;
		$page_title = 'Core HR';
		return view('dashboard/core-hr', compact('action','page_title'));
    }
	
	public function finance()
    {
		$action = __FUNCTION__;
		$page_title = 'Finance';
		return view('dashboard/finance', compact('action','page_title'));
    }
	
	public function task()
    {
		$action = __FUNCTION__;
		$page_title = 'Tasks';
		return view('dashboard/task', compact('action','page_title'));
    }
	
	public function task_summary()
    {
		$action = __FUNCTION__;
		$page_title = 'Task Summary';
		return view('dashboard/task-summary', compact('action','page_title'));
    }

	public function performance()
    {
		$action = __FUNCTION__;
		$page_title = 'Performance';
		return view('dashboard/performance', compact('action','page_title'));
    }

	public function project()
    {
		$action = __FUNCTION__;
		$page_title = 'Projects';
		return view('dashboard/project', compact('action','page_title'));
    }

	public function reports()
    {
		$action = __FUNCTION__;
		$page_title = 'Reports';
		return view('dashboard/reports', compact('action','page_title'));
    }

	public function manage_clients()
    {
		$action = __FUNCTION__;
		$page_title = 'Manage Clients';
		return view('dashboard/manage-clients', compact('action','page_title'));
    }

	public function blog_1()
    {
		$action = __FUNCTION__;
		$page_title = 'Blog 1';
		return view('dashboard/blog-1', compact('action','page_title'));
    }
	public function svg_icon()
    {
		$action = __FUNCTION__;
		$page_title = 'SVG Icons';
		return view('dashboard/svg-icon', compact('action','page_title'));
    }
	/* Darshboard Controllers END */

	/* AIkit Controllers Start */
	public function auto_write()
	{
		$action = __FUNCTION__;
		$page_title = 'Auto Write';
		return view('aikit/auto-write', compact('action','page_title'));
	}
	public function chatbot()
	{
		$action = __FUNCTION__;
		$page_title = 'Chat Bot';
		return view('aikit/chatbot', compact('action','page_title'));
	}
	public function fine_tune_models()
	{
		$action = __FUNCTION__;
		$page_title = 'Fine Tune Models';
		return view('aikit/fine-tune-models', compact('action','page_title'));
	}
	public function import()
	{
		$action = __FUNCTION__;
		$page_title = 'Import';
		return view('aikit/import', compact('action','page_title'));
	}
	public function prompt()
	{
		$action = __FUNCTION__;
		$page_title = 'Prompt';
		return view('aikit/prompt', compact('action','page_title'));
	}
	public function repurpose()
	{
		$action = __FUNCTION__;
		$page_title = 'Repurpose';
		return view('aikit/repurpose', compact('action','page_title'));
	}
	public function rss()
	{
		$action = __FUNCTION__;
		$page_title = 'RSS';
		return view('aikit/rss', compact('action','page_title'));
	}
	public function scheduled()
	{
		$action = __FUNCTION__;
		$page_title = 'Scheduled';
		return view('aikit/scheduled', compact('action','page_title'));
	}
	/* AIkit Controllers End */

	/* CMS Controllers Start */
	public function content()
	{
		$action = __FUNCTION__;
		$page_title = 'Content';
		return view('cms/content', compact('action','page_title'));
	}
	public function add_content()
	{
		$action = __FUNCTION__;
		$page_title = 'Add Content';
		return view('cms/add-content', compact('action','page_title'));
	}
	public function menu()
	{
		$action = __FUNCTION__;
		$page_title = 'Menu';
		return view('cms/menu', compact('action','page_title'));
	}
	public function email_template()
	{
		$action = __FUNCTION__;
		$page_title = 'Email Template';
		return view('cms/email-template', compact('action','page_title'));
	}
	public function add_email()
	{
		$action = __FUNCTION__;
		$page_title = 'Add Email';
		return view('cms/add-email', compact('action','page_title'));
	}
	public function blog()
	{
		$action = __FUNCTION__;
		$page_title = 'Blog';
		return view('cms/blog', compact('action','page_title'));
	}
	public function add_blog()
	{
		$action = __FUNCTION__;
		$page_title = 'Add Blog';
		return view('cms/add-blog', compact('action','page_title'));
	}
	public function blog_category()
	{
		$action = __FUNCTION__;
		$page_title = 'Blog Category';
		return view('cms/blog-category', compact('action','page_title'));
	}
	/* CMS Controllers End */

	/* Apps Controllers Start */
	public function chat()
    {
		$action = __FUNCTION__;
		$page_title = 'Chat';
		return view('apps/chat', compact('action','page_title'));
    }
	public function user()
    {
		$action = __FUNCTION__;
		$page_title = 'User';
		return view('apps/users/user', compact('action','page_title'));
    }
	public function user_roles()
    {
		$action = __FUNCTION__;
		$page_title = 'Roles Listing';
		return view('apps/users/user-roles', compact('action','page_title'));
    }
	public function app_profile_1()
    {
		$action = __FUNCTION__;
		$page_title = 'Profile 1';
		return view('apps/users/app-profile-1', compact('action','page_title'));
    }
	public function app_profile_2()
    {
		$action = __FUNCTION__;
		$page_title = 'Profile 2';
		return view('apps/users/app-profile-2', compact('action','page_title'));
    }
	public function edit_profile()
    {
		$action = __FUNCTION__;
		$page_title = 'Edit Profile';
		return view('apps/users/edit-profile', compact('action','page_title'));
    }
	public function post_details()
    {
		$action = __FUNCTION__;
		$page_title = 'Post Details';
		return view('apps/users/post-details', compact('action','page_title'));
    }
	public function customer()
    {
		$action = __FUNCTION__;
		$page_title = 'Customer';
		return view('apps/customer/customer', compact('action','page_title'));
    }
	public function customer_profile()
    {
		$action = __FUNCTION__;
		$page_title = 'Customer Profile';
		return view('apps/customer/customer-profile', compact('action','page_title'));
    }
	public function contacts()
    {
		$action = __FUNCTION__;
		$page_title = 'Contacts';
		return view('apps/contacts', compact('action','page_title'));
    }
	
	
	public function email_compose()
    {
		$action = __FUNCTION__;
		$page_title = 'Compose';
		return view('apps/email/email-compose', compact('action','page_title'));
    }
	public function email_inbox()
    {
		$action = __FUNCTION__;
		$page_title = 'Inbox';
		return view('apps/email/email-inbox', compact('action','page_title'));
    }
	public function email_read()
    {
		$action = __FUNCTION__;
		$page_title = 'Read';
		return view('apps/email/email-read', compact('action','page_title'));
    }
	
	public function app_calendar()
	{
		$action = __FUNCTION__;
		$page_title = 'Calendar';
		return view('apps/app-calendar', compact('action','page_title'));
	}

	public function ecom_product_grid()
    {
		$action = __FUNCTION__;
		$page_title = 'Product Grid';
		return view('apps/shop/ecom-product-grid', compact('action','page_title'));
    }
	public function ecom_product_list()
    {
		$action = __FUNCTION__;
		$page_title = 'Product List';
		return view('apps/shop/ecom-product-list', compact('action','page_title'));
    }
	public function ecom_product_details()
    {
		$action = __FUNCTION__;
		$page_title = 'Product Details';
		return view('apps/shop/ecom-product-details', compact('action','page_title'));
    }
	public function ecom_product_order()
    {
		$action = __FUNCTION__;
		$page_title = 'Product Order';
		return view('apps/shop/ecom-product-order', compact('action','page_title'));
    }
	public function ecom_checkout()
    {
		$action = __FUNCTION__;
		$page_title = 'Checkout';
		return view('apps/shop/ecom-checkout', compact('action','page_title'));
    }
	public function ecom_invoice()
    {
		$action = __FUNCTION__;
		$page_title = 'Invoice';
		return view('apps/shop/ecom-invoice', compact('action','page_title'));
    }
	public function ecom_customers()
    {
		$action = __FUNCTION__;
		$page_title = 'Customers';
		return view('apps/shop/ecom-customers', compact('action','page_title'));
    }	
	/* Apps Controllers END */
	
	
	/* Chart Controllers Start */
	public function flot()
    {
		$action = __FUNCTION__;
		$page_title = 'Flot';
		return view('charts/chart-flot', compact('action','page_title'));
    }
	public function morris()
    {
		$action = __FUNCTION__;
		$page_title = 'Morris';
		return view('charts/chart-morris', compact('action','page_title'));
    }
	public function chartjs()
    {
		$action = __FUNCTION__;
		$page_title = 'Chartjs';
		return view('charts/chart-chartjs', compact('action','page_title'));
    }
	public function chartist()
    {
		$action = __FUNCTION__;
		$page_title = 'Chartist';
		return view('charts/chart-chartist', compact('action','page_title'));
    }
	public function sparkline()
    {
		$action = __FUNCTION__;
		$page_title = 'Sparkline';
		return view('charts/chart-sparkline', compact('action','page_title'));
    }
	public function peity()
    {
		$action = __FUNCTION__;
		$page_title = 'Peity';
		return view('charts/chart-peity', compact('action','page_title'));
    }
	/* Chart Controllers END */
	
	
	/* Components Controllers Start */
	
	/* Bootstrap Components END */
	public function accordion()
    {
		$action = __FUNCTION__;
		$page_title = 'Accordion';
		return view('components/bootstrap/ui-accordion', compact('action','page_title'));
    }
	public function alert()
    {
		$action = __FUNCTION__;
		$page_title = 'Alert';
		return view('components/bootstrap/ui-alert', compact('action','page_title'));
    }
	public function badge()
    {
		$action = __FUNCTION__;
		$page_title = 'Badge';
		return view('components/bootstrap/ui-badge', compact('action','page_title'));
    }
	public function button()
    {
		$action = __FUNCTION__;
		$page_title = 'Button';
		return view('components/bootstrap/ui-button', compact('action','page_title'));
    }
	public function modal()
    {
		$action = __FUNCTION__;
		$page_title = 'Modal';
		return view('components/bootstrap/ui-modal', compact('action','page_title'));
    }
	public function button_group()
    {
		$action = __FUNCTION__;
		$page_title = 'Button Group';
		return view('components/bootstrap/ui-button-group', compact('action','page_title'));
    }
	public function list_group()
    {
		$action = __FUNCTION__;
		$page_title = 'List Group';
		return view('components/bootstrap/ui-list-group', compact('action','page_title'));
    }
	public function media_object()
    {
		$action = __FUNCTION__;
		$page_title = 'Media Object';
		return view('components/bootstrap/ui-media-object', compact('action','page_title'));
    }
	public function card()
    {
		$action = __FUNCTION__;
		$page_title = 'Card';
		return view('components/bootstrap/ui-card', compact('action','page_title'));
    }
	public function carousel()
    {
		$action = __FUNCTION__;
		$page_title = 'Carousel';
		return view('components/bootstrap/ui-carousel', compact('action','page_title'));
    }
	public function dropdown()
    {
		$action = __FUNCTION__;
		$page_title = 'Dropdown';
		return view('components/bootstrap/ui-dropdown', compact('action','page_title'));
    }
	public function popover()
    {
		$action = __FUNCTION__;
		$page_title = 'Popover';
		return view('components/bootstrap/ui-popover', compact('action','page_title'));
    }
	public function progressbar()
    {
		$action = __FUNCTION__;
		$page_title = 'Progress Bar';
		return view('components/bootstrap/ui-progressbar', compact('action','page_title'));
    }
	public function tab()
    {
		$action = __FUNCTION__;
		$page_title = 'Tab';
		return view('components/bootstrap/ui-tab', compact('action','page_title'));
    }
	public function typography()
    {
		$action = __FUNCTION__;
		$page_title = 'Typography';
		return view('components/bootstrap/ui-typography', compact('action','page_title'));
    }
	public function pagination()
    {
		$action = __FUNCTION__;
		$page_title = 'Pagination';
		return view('components/bootstrap/ui-pagination', compact('action','page_title'));
    }
	public function grid()
    {
		$action = __FUNCTION__;
		$page_title = 'Grid';
		return view('components/bootstrap/ui-grid', compact('action','page_title'));
    }
	/* Bootstrap Components END */
	
	/* Plugin Components Start */
	public function select2()
    {
		$action = __FUNCTION__;
		$page_title = 'Select2';
		return view('components/plugins/uc-select2', compact('action','page_title'));
    }
	public function nestable()
    {
		$action = __FUNCTION__;
		$page_title = 'Nestable';
		return view('components/plugins/uc-nestable', compact('action','page_title'));
    }
	public function noui_slider()
    {
		$action = __FUNCTION__;
		$page_title = 'Noui Slider';
		return view('components/plugins/uc-noui-slider', compact('action','page_title'));
    }
	public function sweetalert()
    {
		$action = __FUNCTION__;
		$page_title = 'Sweet Alert';
		return view('components/plugins/uc-sweetalert', compact('action','page_title'));
    }
	public function toastr()
    {
		$action = __FUNCTION__;
		$page_title = 'Toastr';
		return view('components/plugins/uc-toastr', compact('action','page_title'));
    }
	public function map_jqvmap()
    {
		$action = __FUNCTION__;
		$page_title = 'Map Jqvmap';
		return view('components/plugins/map-jqvmap', compact('action','page_title'));
    }
	public function lightgallery()
    {
		$action = __FUNCTION__;
		$page_title = 'Light Gallery';
		return view('components/plugins/uc-lightgallery', compact('action','page_title'));
    }
	/* Plugin Components Start */
	
	/* Widget Start */
	public function widget_basic()
    {
		$action = __FUNCTION__;
		$page_title = 'Widget Basic';
		return view('components/widget-basic', compact('action','page_title'));
    }
	/* Widget END */
	
	/* Form Components Start */
	public function form_element()
    {
		$action = __FUNCTION__;
		$page_title = 'Form Elements';
		return view('components/forms/form-element', compact('action','page_title'));
    }
	public function form_wizard()
    {
		$action = __FUNCTION__;
		$page_title = 'Form Wizard';
		return view('components/forms/form-wizard', compact('action','page_title'));
    }
	public function form_ckeditor()
    {
		$action = __FUNCTION__;
		$page_title = 'Form Ckeditor';
		return view('components/forms/form-ckeditor', compact('action','page_title'));
    }
	public function form_pickers()
    {
		$action = __FUNCTION__;
		$page_title = 'Form Pickers';
		return view('components/forms/form-pickers', compact('action','page_title'));
    }
	public function form_validation_jquery()
    {
		$action = __FUNCTION__;
		$page_title = 'Form Validation Jquery';
		return view('components/forms/form-validation-jquery', compact('action','page_title'));
    }	
	/* Form Components END */
	
	/* Table Components Start */
	public function table_bootstrap()
    {
		$action = __FUNCTION__;
		$page_title = 'Table Bootstrap Basic';
		return view('components/table/table-bootstrap-basic', compact('action','page_title'));
    }
	public function table_datatable()
    {
		$action = __FUNCTION__;
		$page_title = 'Table Datatable Basic';
		return view('components/table/table-datatable-basic', compact('action','page_title'));
    }
	/* Table Components END */
	
	/* Pages Components Start */
	public function page_register()
    {
		$action = __FUNCTION__;
		return view('components/pages/page-register', compact('action'));
    }
	public function page_login()
    {
		$action = __FUNCTION__;
		return view('components/pages/page-login', compact('action'));
    }
	public function page_forgot_password()
    {
		$action = __FUNCTION__;
		return view('components/pages/page-forgot-password', compact('action'));
    }
	public function page_empty()
    {
		$action = __FUNCTION__;
		return view('components/pages/page-empty', compact('action'));
    }	
	public function page_lock_screen()
    {
		$action = __FUNCTION__;
		return view('components/pages/page-lock-screen', compact('action'));
    }
	public function page_error_400()
    {
		$action = __FUNCTION__;
		return view('components/pages/error/page-error-400', compact('action'));
    }
	public function page_error_403()
    {
		$action = __FUNCTION__;
		return view('components/pages/error/page-error-403', compact('action'));
    }
	public function page_error_404()
    {
		$action = __FUNCTION__;
		return view('components/pages/error/page-error-404', compact('action'));
    }
	public function page_error_500()
    {
		$action = __FUNCTION__;
		return view('components/pages/error/page-error-500', compact('action'));
    }
	public function page_error_503()
    {
		$action = __FUNCTION__;
		return view('components/pages/error/page-error-503', compact('action'));
    }
	/* Pages Components END */
	
	/* Components Controllers END */
}