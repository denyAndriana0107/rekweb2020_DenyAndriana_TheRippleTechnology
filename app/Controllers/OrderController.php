<?php namespace App\Controllers;

use App\Models\OrderModel;
use CodeIgniter\Controller;

class OrderController extends Controller
{
    protected $orderModel;
	public function __construct()
	{
		$this->orderModel = new OrderModel();
	}
    public function index()
    {
        $userid= user_id();
        var_dump($userid);
        $data=array('title'=>'Data Barang',
        'orderProducts'=>$this->orderModel->getOrderData($userid));
        return view('user/index',$data);
    }
}