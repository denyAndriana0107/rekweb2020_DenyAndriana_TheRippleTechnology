<?php 
namespace App\Controllers;
use App\Models\PembayaranModel;
class Admin extends BaseController
{
	
    protected $pembayaranModel;
    public function __construct()
    {
        $this->pembayaranModel = new PembayaranModel();
    }
	
	public function index()
	{	
		$data=$this->pembayaranModel->allPembayaran();
		$result=$this->get_CURL("https://phoneapideny.herokuapp.com/Phone");
		$data=array('title'=>'Admin Control Panel',
					'result'=> $result,
					'order'=>$data
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
	public function confirmOrder($id){
		$confirm=$this->request->getVar('radios');
		$this->pembayaranModel->where('id_order',$id)->set([
			'status_pembayaran'=>$confirm
		])->update();
		return redirect()->to('/adminpanel');
		
	}
}
