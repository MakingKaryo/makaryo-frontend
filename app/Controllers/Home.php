<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('pages/home');
	}

	public function project(){
		return view('pages/project');
	}
	
	public function create_project()
	{
		return view('pages/create_project');
	}

	public function sell_services()
	{
		return view('pages/sell_services');
	}

	//--------------------------------------------------------------------

}
