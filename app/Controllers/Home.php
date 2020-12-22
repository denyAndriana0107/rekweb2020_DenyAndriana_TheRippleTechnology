<?php namespace App\Controllers;

use Config\App;
class Home extends BaseController
{
	
	public function index()
	{	
		$channelId = 'UCkXmLjEr95LVtGuIm3l2dPg';
		// $channelId = 'UC-lHJZR3Gqxm24_Vd_AJ5Yw';
		$result=$this->get_CURL('https://phoneapideny.herokuapp.com/Phone');
		$data = array('result'=>$result,'title'=>'Home');
		return view('page/index',$data);
	}
	public function details($id){
		$result=$this->get_CURL('https://phoneapideny.herokuapp.com/Phone/'.$id);
		$data = array('result'=>$result,'title'=>'details');
		return view('page/details',$data);
	}
	public function order()
	{
		$data = array('user'=>$_SESSION["logged_in"]);
		return view('page/order',$data);
	}
}
