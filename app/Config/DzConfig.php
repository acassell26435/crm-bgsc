<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class DzConfig extends BaseConfig
{
    public $dzAssets = [

		/*
		|--------------------------------------------------------------------------
		| Application Name
		|--------------------------------------------------------------------------
		|
		| This value is the name of your application. This value is used when the
		| framework needs to place the application's name in a notification or
		| any other location as required by the application or its packages.
		|
		*/

		'name' => 'W3crm Codeigniter',
		

		'public' => [
			'favicon' => 'media/img/logo/favicon.ico',
			'fonts' => [
				'google' => [
					'families' => [
						'Poppins:300,400,500,600,700',
					]
				]
			],
			'global' => [
				'css' => [
					'public/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
					'public/assets/css/style.css',
				],
				'js' => [
					'top'=>[
						'public/assets/vendor/global/global.min.js',
						'public/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js',	
					],
					'bottom'=>[
						'public/assets/js/custom.js',
						'public/assets/js/deznav-init.js',
					],
				],
			],
			'pagelevel' => [
				'css' => [
					'W3crmAdmin_index' => [
						'public/assets/vendor/chartist/css/chartist.min.css',
						'public/assets/vendor/jvmap/jquery-jvectormap.css',
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
						'https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css',
						'public/assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
						'public/assets/vendor/tagify/dist/tagify.css',
					],
					'W3crmAdmin_index_2' => [
						'public/assets/vendor/chartist/css/chartist.min.css',
						'public/assets/vendor/jvmap/jquery-jvectormap.css',
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
						'https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css',
						'public/assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
						'public/assets/vendor/tagify/dist/tagify.css',
					],
					'W3crmAdmin_employee' => [
						'public/assets/vendor/swiper/css/swiper-bundle.min.css',
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
						'https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css',
						'public/assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
						'public/assets/vendor/tagify/dist/tagify.css',
					],
					'W3crmAdmin_core_hr' => [
						'https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css',
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
						'public/assets/vendor/clockpicker/css/bootstrap-clockpicker.min.css',
						'public/assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
						'public/assets/vendor/tagify/dist/tagify.css',
					],
					'W3crmAdmin_finance' => [
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
						'https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css',
						'public/assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
						'public/assets/vendor/tagify/dist/tagify.css',
					],
					'W3crmAdmin_task' => [
						'public/assets/vendor/swiper/css/swiper-bundle.min.css',
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
						'https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css',
						'public/assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
						'public/assets/vendor/tagify/dist/tagify.css',
					],
					'W3crmAdmin_task_summary' => [
						'public/assets/vendor/tagify/dist/tagify.css',
					],
					'W3crmAdmin_performance' => [
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
						'https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css',
						'public/assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
						'public/assets/vendor/tagify/dist/tagify.css',
					],
					'W3crmAdmin_project' => [
						'public/assets/vendor/tagify/dist/tagify.css',
					],
					'W3crmAdmin_reports' => [
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
						'https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css',
						'public/assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
						'public/assets/vendor/tagify/dist/tagify.css',
					],
					'W3crmAdmin_manage_clients' => [
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
						'https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css',
						'public/assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
						'public/assets/vendor/tagify/dist/tagify.css',
					],
					'W3crmAdmin_blog_1' => [
					],
					'W3crmAdmin_svg_icon' => [
						'https://fonts.googleapis.com/css2?family=Material+Icons'
					],
					'W3crmAdmin_chat' => [
					],
					'W3crmAdmin_user' => [
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
						'https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css',
					],
					'W3crmAdmin_user_roles' => [
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
					],
					'W3crmAdmin_auto_write' => [
						'https://fonts.googleapis.com/css2?family=Material+Icons',
					],
					'W3crmAdmin_chatbot' => [
						'https://fonts.googleapis.com/css2?family=Material+Icons',
						'public/assets/vendor/nouislider/nouislider.min.css',
						'public/assets/vendor/clockpicker/css/bootstrap-clockpicker.min.css',
						'public/assets/vendor/jquery-asColorPicker/css/asColorPicker.min.css',
						'public/assets/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css',
					],
					'W3crmAdmin_fine_tune_models' => [
						'https://fonts.googleapis.com/css2?family=Material+Icons',
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
						'https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css',
					],
					'W3crmAdmin_import' => [
						'public/assets/vendor/dropzone/dist/dropzone.css',
						'https://fonts.googleapis.com/css2?family=Material+Icons',
					],
					'W3crmAdmin_prompt' => [
						'https://fonts.googleapis.com/css2?family=Material+Icons',
						'public/assets/vendor/nouislider/nouislider.min.css',
					],
					'W3crmAdmin_repurpose' => [
						'https://fonts.googleapis.com/css2?family=Material+Icons',
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
						'https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css',
					],
					'W3crmAdmin_rss' => [
						'https://fonts.googleapis.com/css2?family=Material+Icons',
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
						'https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css',
					],
					'W3crmAdmin_scheduled' => [
						'public/assets/vendor/swiper/css/swiper-bundle.min.css',
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
						'https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css',
						'public/assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
						'public/assets/vendor/tagify/dist/tagify.css',
					],
					'W3crmAdmin_setting' => [
						'https://fonts.googleapis.com/css2?family=Material+Icons',
						'public/assets/vendor/nouislider/nouislider.min.css',
						'public/assets/vendor/clockpicker/css/bootstrap-clockpicker.min.css',
						'public/assets/vendor/jquery-asColorPicker/css/asColorPicker.min.css',
						'public/assets/vendor/tagify/dist/tagify.css',
						'public/assets/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css',
					],
					'W3crmAdmin_content' => [
						'public/assets/vendor/chartist/css/chartist.min.css',
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
					],
					'W3crmAdmin_add_content' => [
						'public/assets/vendor/select2/css/select2.min.css',
					],
					'W3crmAdmin_menu' => [
						'public/assets/vendor/jqvmap/css/jqvmap.min.css',
						'public/assets/vendor/chartist/css/chartist.min.css',
						'public/assets/vendor/nestable2/css/jquery.nestable.min.css',
					],
					'W3crmAdmin_email_template' => [
						'public/assets/vendor/chartist/css/chartist.min.css',
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
					],
					'W3crmAdmin_add_email' => [
						'public/assets/vendor/chartist/css/chartist.min.css',
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
					],
					'W3crmAdmin_blog' => [
						'public/assets/vendor/chartist/css/chartist.min.css',
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
					],
					'W3crmAdmin_add_blog' => [
						'public/assets/vendor/jqvmap/css/jqvmap.min.css',
						'public/assets/vendor/select2/css/select2.min.css',
					],
					'W3crmAdmin_blog_category' => [
						'public/assets/vendor/chartist/css/chartist.min.css',
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
					],
					'W3crmAdmin_app_profile_1' => [
						'public/assets/vendor/lightgallery/css/lightgallery.min.css',
					],
					'W3crmAdmin_app_profile_2' => [
						'public/assets/vendor/lightgallery/css/lightgallery.min.css',
					],
					'W3crmAdmin_edit_profile' => [
					],
					'W3crmAdmin_post_details' => [
						'public/assets/vendor/lightgallery/css/lightgallery.min.css',
					],
					'W3crmAdmin_customer' => [
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
						'https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css',
						'public/assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
						'public/assets/vendor/tagify/dist/tagify.css',
					],
					'W3crmAdmin_customer_profile' => [
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
						'https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css',
						'public/assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
						'public/assets/vendor/tagify/dist/tagify.css',
					],					
					'W3crmAdmin_contacts' => [
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
						'https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css',
						'public/assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
						'public/assets/vendor/tagify/dist/tagify.css',
					],					
					'W3crmAdmin_email_compose' => [
						'public/assets/vendor/dropzone/dist/dropzone.css',
						'https://fonts.googleapis.com/css2?family=Material+Icons',
						'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css',
					],					
					'W3crmAdmin_email_inbox' => [
					],					
					'W3crmAdmin_email_read' => [
					],					
					'W3crmAdmin_app_calendar' => [
						'public/assets/vendor/fullcalendar/css/main.min.css',
					],
					'W3crmAdmin_chartist' => [
						'public/assets/vendor/chartist/css/chartist.min.css',
					],
					'W3crmAdmin_chartjs' => [
					],
					'W3crmAdmin_flot' => [

					],
					'W3crmAdmin_morris' => [
					],
					'W3crmAdmin_peity' => [
					],
					'W3crmAdmin_sparkline' => [
					],
					'W3crmAdmin_ecom_checkout' => [
					],
					'W3crmAdmin_ecom_customers' => [
					],
					'W3crmAdmin_ecom_invoice' => [
					],
					'W3crmAdmin_ecom_product_details' => [
						'public/assets/vendor/star-rating/star-rating-svg.css',
					],
					'W3crmAdmin_ecom_product_grid' => [
						'public/assets/vendor/star-rating/star-rating-svg.css',
					],
					'W3crmAdmin_ecom_product_list' => [
						'public/assets/vendor/star-rating/star-rating-svg.css',
					],
					'W3crmAdmin_ecom_product_order' => [
					],
					'W3crmAdmin_form_ckeditor' => [
						'public/assets/vendor/summernote/summernote.css',
					],
					'W3crmAdmin_form_element' => [
					],
					'W3crmAdmin_form_pickers' => [
						'public/assets/vendor/bootstrap-daterangepicker/daterangepicker.css',
						'public/assets/vendor/clockpicker/css/bootstrap-clockpicker.min.css',
						'public/assets/vendor/jquery-asColorPicker/css/asColorPicker.min.css',
						'public/assets/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css',
						'public/assets/vendor/pickadate/themes/default.css',
						'public/assets/vendor/pickadate/themes/default.date.css',
						'https://fonts.googleapis.com/icon?family=Material+Icons',
					],
					'W3crmAdmin_form_validation_jquery' => [
					],
					'W3crmAdmin_form_wizard' => [
						'public/assets/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css',
					],
					'W3crmAdmin_map_jqvmap' => [
						'public/assets/vendor/jqvmap/css/jqvmap.min.css',
					],
					'W3crmAdmin_table_bootstrap' => [
					],
					'W3crmAdmin_table_datatable' => [
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
					],
					'W3crmAdmin_lightgallery' => [
						'public/assets/vendor/lightgallery/css/lightgallery.min.css',
					],
					'W3crmAdmin_nestable' => [
						'public/assets/vendor/nestable2/css/jquery.nestable.min.css',
					],
					'W3crmAdmin_noui_slider' => [
						'public/assets/vendor/nouislider/nouislider.min.css',
					],
					'W3crmAdmin_select2' => [
						'public/assets/vendor/select2/css/select2.min.css',
					],
					'W3crmAdmin_sweetalert' => [
						'public/assets/vendor/sweetalert2/dist/sweetalert2.min.css',
					],
					'W3crmAdmin_toastr' => [
						'public/assets/vendor/toastr/css/toastr.min.css',
					],
					'W3crmAdmin_accordion' => [
					],
					'W3crmAdmin_alert' => [
					],
					'W3crmAdmin_badge' => [
					],
					'W3crmAdmin_button' => [
					],
					'W3crmAdmin_button_group' => [
					],
					'W3crmAdmin_card' => [
					],
					'W3crmAdmin_carousel' => [
					],
					'W3crmAdmin_dropdown' => [
					],
					'W3crmAdmin_grid' => [
					],
					'W3crmAdmin_list_group' => [
					],
					'W3crmAdmin_media_object' => [
					],
					'W3crmAdmin_modal' => [
					],
					'W3crmAdmin_pagination' => [
					],
					'W3crmAdmin_popover' => [
					],
					'W3crmAdmin_progressbar' => [
					],
					'W3crmAdmin_tab' => [
					],
					'W3crmAdmin_typography' => [
					],
					'W3crmAdmin_widget_basic' => [
						'public/assets/vendor/chartist/css/chartist.min.css',
					],
					'W3crmAdmin_demo_modules_index' => [
					],
					'W3crmAdmin_demo_modules_add' => [
					],
					'W3crmAdmin_page_empty' => [
					],
					'W3crmAdmin_page_forgot_password' => [
					],
				],
				'js' => [
					'W3crmAdmin_index' => [
						'public/assets/vendor/chart.js/Chart.bundle.min.js',
						'public/assets/vendor/apexchart/apexchart.js',
						'public/assets/js/dashboard/dashboard-1.js',
						'public/assets/vendor/draggable/draggable.js',
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
						'public/assets/vendor/datatables/js/dataTables.buttons.min.js',
						'public/assets/vendor/datatables/js/buttons.html5.min.js',
						'public/assets/vendor/datatables/js/jszip.min.js',
						'public/assets/js/plugins-init/datatables.init.js',
						'public/assets/vendor/bootstrap-datetimepicker/js/moment.js',
						'public/assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
						'public/assets/vendor/jqvmap/js/jquery.vmap.min.js',
						'public/assets/vendor/jqvmap/js/jquery.vmap.world.js',
						'public/assets/vendor/tagify/dist/tagify.js',
					],
					'W3crmAdmin_index_2' => [
						'public/assets/vendor/chart.js/Chart.bundle.min.js',
						'public/assets/vendor/apexchart/apexchart.js',
						'public/assets/js/dashboard/dashboard-1.js',
						'public/assets/vendor/draggable/draggable.js',
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
						'public/assets/vendor/datatables/js/dataTables.buttons.min.js',
						'public/assets/vendor/datatables/js/buttons.html5.min.js',
						'public/assets/vendor/datatables/js/jszip.min.js',
						'public/assets/js/plugins-init/datatables.init.js',
						'public/assets/vendor/bootstrap-datetimepicker/js/moment.js',
						'public/assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
						'public/assets/vendor/jqvmap/js/jquery.vmap.min.js',
						'public/assets/vendor/jqvmap/js/jquery.vmap.world.js',
						'public/assets/vendor/tagify/dist/tagify.js',
					],
					'W3crmAdmin_employee' => [
						'public/assets/vendor/chart.js/Chart.bundle.min.js',
						'public/assets/vendor/apexchart/apexchart.js',
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
						'public/assets/vendor/datatables/js/dataTables.buttons.min.js',
						'public/assets/vendor/datatables/js/buttons.html5.min.js',
						'public/assets/vendor/datatables/js/jszip.min.js',
						'public/assets/js/plugins-init/datatables.init.js',
						'public/assets/vendor/tagify/dist/tagify.js',
					],
					'W3crmAdmin_core_hr' => [
						'public/assets/vendor/chart.js/Chart.bundle.min.js',
						'public/assets/vendor/clockpicker/js/bootstrap-clockpicker.min.js',
						'public/assets/vendor/apexchart/apexchart.js',	
						'public/assets/js/plugins-init/clock-picker-init.js',
						'public/assets/js/dashboard/core-hr.js',
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
						'public/assets/vendor/datatables/js/dataTables.buttons.min.js',
						'public/assets/vendor/datatables/js/buttons.html5.min.js',
						'public/assets/vendor/datatables/js/jszip.min.js',
						'public/assets/js/plugins-init/datatables.init.js',
						'public/assets/vendor/dropzone/dist/dropzone.js',
						'public/assets/vendor/bootstrap-datetimepicker/js/moment.js',
						'public/assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
						'public/assets/vendor/tagify/dist/tagify.js',
					],
					'W3crmAdmin_finance' => [
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
						'public/assets/vendor/datatables/js/dataTables.buttons.min.js',
						'public/assets/vendor/datatables/js/buttons.html5.min.js',
						'public/assets/vendor/datatables/js/jszip.min.js',
						'public/assets/js/plugins-init/datatables.init.js',
						'public/assets/vendor/bootstrap-datetimepicker/js/moment.js',
						'public/assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
						'public/assets/vendor/tagify/dist/tagify.js',
					],
					'W3crmAdmin_task' => [
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
						'public/assets/vendor/datatables/js/dataTables.buttons.min.js',
						'public/assets/vendor/datatables/js/buttons.html5.min.js',
						'public/assets/vendor/datatables/js/jszip.min.js',
						'public/assets/js/plugins-init/datatables.init.js',
						'public/assets/vendor/tagify/dist/tagify.js',
					],
					'W3crmAdmin_task_summary' => [
						'public/assets/vendor/draggable/draggable.js',
						'public/assets/vendor/tagify/dist/tagify.js',
					],
					'W3crmAdmin_performance' => [
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
						'public/assets/js/plugins-init/datatables.init.js',
						'public/assets/vendor/bootstrap-datetimepicker/js/moment.js',
						'public/assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
						'public/assets/vendor/tagify/dist/tagify.js',
					],
					'W3crmAdmin_project' => [
						'public/assets/vendor/tagify/dist/tagify.js',
					],
					'W3crmAdmin_reports' => [
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
						'public/assets/vendor/datatables/js/dataTables.buttons.min.js',
						'public/assets/vendor/datatables/js/buttons.html5.min.js',
						'public/assets/vendor/datatables/js/jszip.min.js',
						'public/assets/js/plugins-init/datatables.init.js',
						'public/assets/vendor/bootstrap-datetimepicker/js/moment.js',
						'public/assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
						'public/assets/vendor/tagify/dist/tagify.js',
					],
					'W3crmAdmin_manage_clients' => [
						'public/assets/vendor/chart.js/Chart.bundle.min.js',
						'public/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js',
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
						'public/assets/vendor/datatables/js/dataTables.buttons.min.js',
						'public/assets/vendor/datatables/js/buttons.html5.min.js',
						'public/assets/vendor/datatables/js/jszip.min.js',
						'public/assets/js/plugins-init/datatables.init.js',
						'public/assets/vendor/bootstrap-datetimepicker/js/moment.js',
						'public/assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
						'public/assets/vendor/tagify/dist/tagify.js',
					],
					'W3crmAdmin_blog_1' => [
					],
					'W3crmAdmin_svg_icon' => [
					],
					'W3crmAdmin_chat' => [
					],
					'W3crmAdmin_user' => [
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
						'public/assets/vendor/datatables/js/dataTables.buttons.min.js',
						'public/assets/vendor/datatables/js/buttons.html5.min.js',
						'public/assets/vendor/datatables/js/jszip.min.js',
						'public/assets/js/plugins-init/datatables.init.js',
					],
					'W3crmAdmin_user_roles' => [
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
						'public/assets/js/plugins-init/datatables.init.js',
					],
					'W3crmAdmin_customer' => [
						'public/assets/vendor/apexchart/apexchart.js',
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
						'public/assets/vendor/datatables/js/dataTables.buttons.min.js',
						'public/assets/vendor/datatables/js/buttons.html5.min.js',
						'public/assets/vendor/datatables/js/jszip.min.js',
						'public/assets/js/plugins-init/datatables.init.js',
						'public/assets/vendor/bootstrap-datetimepicker/js/moment.js',
						'public/assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
						'public/assets/vendor/tagify/dist/tagify.js',
					],
					'W3crmAdmin_customer_profile' => [
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
						'public/assets/vendor/datatables/js/dataTables.buttons.min.js',
						'public/assets/vendor/datatables/js/buttons.html5.min.js',
						'public/assets/vendor/datatables/js/jszip.min.js',
						'public/assets/js/plugins-init/datatables.init.js',
						'public/assets/vendor/bootstrap-datetimepicker/js/moment.js',
						'public/assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
					],
					'W3crmAdmin_contacts' => [
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
						'public/assets/vendor/datatables/js/dataTables.buttons.min.js',
						'public/assets/vendor/datatables/js/buttons.html5.min.js',
						'public/assets/vendor/datatables/js/jszip.min.js',
						'public/assets/js/plugins-init/datatables.init.js',
						'public/assets/vendor/tagify/dist/tagify.js',
					],
					'W3crmAdmin_auto_write' => [
					],
					'W3crmAdmin_chatbot' => [
						'public/assets/vendor/nouislider/nouislider.min.js',
						'public/assets/vendor/wnumb/wNumb.js',
						'public/assets/vendor/jquery-asColor/jquery-asColor.min.js',
						'public/assets/vendor/jquery-asGradient/jquery-asGradient.min.js',
						'public/assets/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js',
						'public/assets/js/plugins-init/jquery-asColorPicker.init.js',
					],
					'W3crmAdmin_fine_tune_models' => [
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
						'public/assets/vendor/datatables/js/dataTables.buttons.min.js',
						'public/assets/vendor/datatables/js/buttons.html5.min.js',
						'public/assets/vendor/datatables/js/jszip.min.js',
						'public/assets/js/plugins-init/datatables.init.js',
					],
					'W3crmAdmin_import' => [
						'public/assets/vendor/dropzone/dist/dropzone.js',
					],
					'W3crmAdmin_prompt' => [
						'public/assets/vendor/nouislider/nouislider.min.js',
						'public/assets/vendor/wnumb/wNumb.js',
					],
					'W3crmAdmin_repurpose' => [
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
						'public/assets/vendor/datatables/js/dataTables.buttons.min.js',
						'public/assets/vendor/datatables/js/buttons.html5.min.js',
						'public/assets/vendor/datatables/js/jszip.min.js',
						'public/assets/js/plugins-init/datatables.init.js',
					],
					'W3crmAdmin_rss' => [
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
						'public/assets/vendor/datatables/js/dataTables.buttons.min.js',
						'public/assets/vendor/datatables/js/buttons.html5.min.js',
						'public/assets/vendor/datatables/js/jszip.min.js',
						'public/assets/js/plugins-init/datatables.init.js',
					],
					'W3crmAdmin_scheduled' => [
						'public/assets/vendor/chart.js/Chart.bundle.min.js',
						'public/assets/vendor/apexchart/apexchart.js',
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
						'public/assets/vendor/datatables/js/dataTables.buttons.min.js',
						'public/assets/vendor/datatables/js/buttons.html5.min.js',
						'public/assets/vendor/datatables/js/jszip.min.js',
						'public/assets/js/plugins-init/datatables.init.js',
					],
					'W3crmAdmin_setting' => [
						'public/assets/vendor/nouislider/nouislider.min.js',
						'public/assets/vendor/wnumb/wNumb.js',
						'public/assets/vendor/jquery-asColor/jquery-asColor.min.js',
						'public/assets/vendor/jquery-asGradient/jquery-asGradient.min.js',
						'public/assets/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js',
						'public/assets/js/plugins-init/jquery-asColorPicker.init.js',
						'public/assets/vendor/tagify/dist/tagify.js',
					],
					'W3crmAdmin_content' => [
						'public/assets/js/dashboard/cms.js',
						'public/assets/vendor/ckeditor/ckeditor.js',
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
					],
					'W3crmAdmin_add_content' => [
						'public/assets/vendor/ckeditor/ckeditor.js',
						'public/assets/vendor/select2/js/select2.full.min.js',
						'public/assets/js/plugins-init/select2-init.js',
						'public/assets/js/dashboard/cms.js',
					],
					'W3crmAdmin_menu' => [
						'public/assets/js/dashboard/cms.js',
						'public/assets/vendor/nestable2/js/jquery.nestable.min.js',
						'public/assets/js/plugins-init/nestable-init.js',
						'public/assets/vendor/ckeditor/ckeditor.js',
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
					],
					'W3crmAdmin_email_template' => [
						'public/assets/js/dashboard/cms.js',
						'public/assets/vendor/nestable2/js/jquery.nestable.min.js',
						'public/assets/js/plugins-init/nestable-init.js',
						'public/assets/vendor/ckeditor/ckeditor.js',
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
					],
					'W3crmAdmin_add_email' => [
						'public/assets/js/dashboard/cms.js',
						'public/assets/vendor/nestable2/js/jquery.nestable.min.js',
						'public/assets/js/plugins-init/nestable-init.js',
						'public/assets/vendor/ckeditor/ckeditor.js',
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
					],
					'W3crmAdmin_blog' => [
						'public/assets/vendor/jqvmap/css/jqvmap.min.css',
						'public/assets/vendor/chartist/css/chartist.min.css',
						'public/assets/vendor/datatables/css/jquery.dataTables.min.css',
					],
					'W3crmAdmin_add_blog' => [
						'public/assets/js/dashboard/cms.js',
						'public/assets/vendor/nestable2/js/jquery.nestable.min.js',
						'public/assets/js/plugins-init/nestable-init.js',
						'public/assets/vendor/ckeditor/ckeditor.js',
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
					],
					'W3crmAdmin_blog_category' => [
						'public/assets/js/dashboard/cms.js',
						'public/assets/vendor/nestable2/js/jquery.nestable.min.js',
						'public/assets/js/plugins-init/nestable-init.js',
						'public/assets/vendor/ckeditor/ckeditor.js',
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
					],
					'W3crmAdmin_app_calendar' => [
						'public/assets/vendor/moment/moment.min.js',
						'public/assets/vendor/fullcalendar/js/main.min.js',
						'public/assets/js/plugins-init/fullcalendar-init.js',
					],
					'W3crmAdmin_app_profile_1' => [
						'public/assets/vendor/lightgallery/js/lightgallery-all.min.js',
						'public/assets/vendor/magnific-popup/jquery.magnific-popup.js',
					],
					'W3crmAdmin_app_profile_2' => [
						'public/assets/vendor/lightgallery/js/lightgallery-all.min.js',
					],
					'W3crmAdmin_edit_profile' => [
					],
					'W3crmAdmin_post_details' => [
						'public/assets/vendor/lightgallery/js/lightgallery-all.min.js',
						'public/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js',
					],
					'W3crmAdmin_chartist' => [
						'public/assets/vendor/chartist/js/chartist.min.js',
						'public/assets/vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js',
						'public/assets/js/plugins-init/chartist-init.js',
					],
					'W3crmAdmin_chartjs' => [
						'public/assets/vendor/chart.js/Chart.bundle.min.js',
						'public/assets/js/plugins-init/chartjs-init.js',
					],
					'W3crmAdmin_flot' => [
						'public/assets/vendor/chart.js/Chart.bundle.min.js',
						'public/assets/vendor/flot/jquery.flot.js',
						'public/assets/vendor/flot/jquery.flot.pie.js',
						'public/assets/vendor/flot/jquery.flot.resize.js',
						'public/assets/vendor/flot-spline/jquery.flot.spline.min.js',
						'public/assets/js/plugins-init/flot-init.js',
					],
					'W3crmAdmin_morris' => [
						'public/assets/vendor/chart.js/Chart.bundle.min.js',
						'public/assets/vendor/raphael/raphael.min.js',
						'public/assets/vendor/morris/morris.min.js',
						'public/assets/js/plugins-init/morris-init.js',
					],
					'W3crmAdmin_peity' => [
						'public/assets/vendor/chart.js/Chart.bundle.min.js',
						'public/assets/vendor/peity/jquery.peity.min.js',
						'public/assets/js/plugins-init/piety-init.js',

					],
					'W3crmAdmin_sparkline' => [
						'public/assets/vendor/chart.js/Chart.bundle.min.js',
						'public/assets/vendor/jquery-sparkline/jquery.sparkline.min.js',
						'public/assets/js/plugins-init/sparkline-init.js',
						'public/assets/vendor/svganimation/vivus.min.js',
						'public/assets/vendor/svganimation/svg.animation.js',
					],
					'W3crmAdmin_ecom_checkout' => [
					],
					'W3crmAdmin_ecom_customers' => [
								
					],
					'W3crmAdmin_ecom_invoice' => [
					],
					'W3crmAdmin_ecom_product_details' => [
						'public/assets/vendor/star-rating/jquery.star-rating-svg.js',
						'public/assets/vendor/owl-carousel/owl.carousel.js',
					],
					'W3crmAdmin_ecom_product_grid' => [
					],
					'W3crmAdmin_ecom_product_list' => [
						'public/assets/vendor/star-rating/jquery.star-rating-svg.js',
					],
					'W3crmAdmin_ecom_product_order' => [
					],
					'W3crmAdmin_email_compose' => [
						'public/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js',
						'public/assets/vendor/dropzone/dist/dropzone.js',
					],
					'W3crmAdmin_email_inbox' => [
					],
					'W3crmAdmin_email_read' => [
					],
					'W3crmAdmin_form_ckeditor' => [
						'public/assets/vendor/ckeditor/ckeditor.js',
					],
					'W3crmAdmin_form_element' => [
					],
					'W3crmAdmin_form_pickers' => [
						'public/assets/vendor/moment/moment.min.js',
						'public/assets/vendor/bootstrap-daterangepicker/daterangepicker.js',
						'public/assets/vendor/clockpicker/js/bootstrap-clockpicker.min.js',
						'public/assets/vendor/jquery-asColor/jquery-asColor.min.js',
						'public/assets/vendor/jquery-asGradient/jquery-asGradient.min.js',
						'public/assets/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js',
						'public/assets/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js',
						'public/assets/vendor/pickadate/picker.js',
						'public/assets/vendor/pickadate/picker.time.js',
						'public/assets/vendor/pickadate/picker.date.js',
						'public/assets/js/plugins-init/bs-daterange-picker-init.js',
						'public/assets/js/plugins-init/clock-picker-init.js',
						'public/assets/js/plugins-init/jquery-asColorPicker.init.js',
						'public/assets/js/plugins-init/material-date-picker-init.js',
						'public/assets/js/plugins-init/pickadate-init.js',
					],
					'W3crmAdmin_form_validation_jquery' => [
						'public/assets/vendor/jquery-validation/jquery.validate.min.js',
						'public/assets/js/plugins-init/jquery.validate-init.js',
					],
					'W3crmAdmin_form_wizard' => [
						'public/assets/vendor/jquery-steps/build/jquery.steps.min.js',
						'public/assets/vendor/jquery-validation/jquery.validate.min.js',
						'public/assets/js/plugins-init/jquery.validate-init.js',
						'public/assets/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js',
					],
					'W3crmAdmin_map_jqvmap' => [
						'public/assets/vendor/jqvmap/js/jquery.vmap.min.js',
						'public/assets/vendor/jqvmap/js/jquery.vmap.world.js',
						'public/assets/vendor/jqvmap/js/jquery.vmap.usa.js',
						'public/assets/js/plugins-init/jqvmap-init.js',
					],
					
					'W3crmAdmin_page_error_400' => [
					],
					'W3crmAdmin_page_error_403' => [
					],
					'W3crmAdmin_page_error_404' => [
					],
					'W3crmAdmin_page_error_500' => [
					],
					'W3crmAdmin_page_error_503' => [
					],
					'W3crmAdmin_page_empty' => [
					],
					'W3crmAdmin_page_lock_screen' => [
						'public/assets/vendor/deznav/deznav.min.js',
					],
					'W3crmAdmin_page_login' => [
					],
					'W3crmAdmin_page_forgot_password' => [
					],
					'W3crmAdmin_page_register' => [
					],
					'W3crmAdmin_table_bootstrap' => [
						'public/assets/js/highlight.min.js',
					],
					'W3crmAdmin_table_datatable' => [
						'public/assets/vendor/datatables/js/jquery.dataTables.min.js',
						'public/assets/js/plugins-init/datatables.init.js',
						'public/assets/js/highlight.min.js',
					],
					'W3crmAdmin_lightgallery' => [
						'public/assets/vendor/lightgallery/js/lightgallery-all.min.js',
					],
					'W3crmAdmin_nestable' => [
						'public/assets/vendor/nestable2/js/jquery.nestable.min.js',
						'public/assets/js/plugins-init/nestable-init.js',
					],
					'W3crmAdmin_noui_slider' => [
						'public/assets/vendor/nouislider/nouislider.min.js',
						'public/assets/vendor/wnumb/wNumb.js',
						'public/assets/js/plugins-init/nouislider-init.js',
					],
					'W3crmAdmin_select2' => [
						'public/assets/vendor/select2/js/select2.full.min.js',
						'public/assets/js/plugins-init/select2-init.js',
					],
					'W3crmAdmin_sweetalert' => [
						'public/assets/vendor/sweetalert2/dist/sweetalert2.min.js',
						'public/assets/js/plugins-init/sweetalert.init.js',
					],
					'W3crmAdmin_toastr' => [
						'public/assets/vendor/toastr/js/toastr.min.js',
						'public/assets/js/plugins-init/toastr-init.js',
					],
					'W3crmAdmin_accordion' => [
					],
					'W3crmAdmin_alert' => [
					],
					'W3crmAdmin_badge' => [
					],
					'W3crmAdmin_button' => [
					],
					'W3crmAdmin_button_group' => [
					],
					'W3crmAdmin_card' => [
					],
					'W3crmAdmin_carousel' => [
					],
					'W3crmAdmin_dropdown' => [
					],
					'W3crmAdmin_grid' => [
					],
					'W3crmAdmin_list_group' => [
					],
					'W3crmAdmin_media_object' => [
					],
					'W3crmAdmin_modal' => [
					],
					'W3crmAdmin_pagination' => [
					],
					'W3crmAdmin_popover' => [
					],
					'W3crmAdmin_progressbar' => [
					],
					'W3crmAdmin_tab' => [
					],
					'W3crmAdmin_typography' => [
					],
					'W3crmAdmin_widget_basic' => [
						'public/assets/vendor/chart.js/Chart.bundle.min.js',
						'public/assets/vendor/apexchart/apexchart.js',
						'public/assets/vendor/chartist/js/chartist.min.js',
						'public/assets/vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js',
						'public/assets/vendor/flot/jquery.flot.js',
						'public/assets/vendor/flot/jquery.flot.pie.js',
						'public/assets/vendor/flot/jquery.flot.resize.js',
						'public/assets/vendor/flot-spline/jquery.flot.spline.min.js',
						'public/assets/vendor/jquery-sparkline/jquery.sparkline.min.js',
						'public/assets/js/plugins-init/sparkline-init.js',
						'public/assets/vendor/peity/jquery.peity.min.js',
						'public/assets/js/plugins-init/piety-init.js',
						'public/assets/js/plugins-init/widgets-script-init.js',
					],
						
				]
			],
		]
	];

}
