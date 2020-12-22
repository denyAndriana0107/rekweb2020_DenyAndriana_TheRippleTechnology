<?php 
namespace App\Controllers;

class Admin extends BaseController
{
	
	
	public function index()
	{	
		$result=$this->get_CURL("https://phoneapideny.herokuapp.com/Phone");
		$data=array('title'=>'Admin Control Panel',
					'result'=> $result
		);
		return view('admin/index',$data);
	}

	//--------------------------------------------------------------------
	public function edit($id){
		$result=$this->get_CURL('https://phoneapideny.herokuapp.com/Phone/'.$id);
		$data = array('result'=>$result,'title'=>'Admin Edit Product ');
		return view('admin/edit',$data);
	}
	public function add(){
		$data=array('title'=>'add product');
		return view('admin/tambah',$data);
	}
	public function deleteProduct($id){
		$url = 'https://phoneapideny.herokuapp.com/Phone/'.$id;
		$data = array('url'=>$url,'title'=>'Admin Edit Product ');
		return view('admin/delete',$data);
	}
}
