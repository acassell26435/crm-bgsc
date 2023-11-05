<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	
	public $themed = '';
	
	function __construct()
	{ 
	    //parent::__construct();				
		//$this->themed = 'admin';
	}
	
    public function index()
    {
       return view('dashboard/index');
    }
	
    public function header()
    {
       return view('dashboard/header');
    }
	
}
