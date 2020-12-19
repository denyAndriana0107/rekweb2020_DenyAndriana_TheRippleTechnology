<?php 
namespace App\Controllers;

class Admin extends BaseController
{
	
	
	public function index()
	{	
		$data=array('title'=>'details');
		return view('admin/addProduct',$data);
	}

	//--------------------------------------------------------------------

}
