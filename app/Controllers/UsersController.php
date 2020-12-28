<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\PembayaranModel;

class UsersController extends BaseController
{
    protected $orderModel;
    protected $pembayaranModel;
    public function __construct()
    {
        $this->orderModel = new OrderModel();
        $this->pembayaranModel = new PembayaranModel();

    }
    public function index()
    {
        $result =$this->pembayaranModel->getPembayaranData(user_id());
        $data = array(
            'title' => 'Data Barang',
            'result' => $result
        );
        return view('user/index', $data);
    }

    public function save()
    {
        if ($this->validate([
            'id' => [
                'rules' => 'required|is_unique[order.id]'
            ]
        ])) {
            return redirect()->to('order')->withInput();
        }
        $this->orderModel->save([
            'nama_product' => $this->request->getVar('nama_product'),
            'id_users' => $this->request->getVar('id_users'),
            'alamat' => 'Jln.' . $this->request->getVar('alamat1') . ' ' . $this->request->getVar('alamat2') . ', Kota ' .
                $this->request->getVar('alamat3') . ', Kode Pos : ' . $this->request->getVar('alamat4') . ', Provinsi ' . $this->request->getVar('alamat5')
        ]);
        var_dump($this->orderModel->getInsertID());

        $this->pembayaranModel->save([
            'total_harga' => $this->request->getVar('total_harga'),
            'metode_pembayaran' => $this->request->getVar('radio'),
            'bukti_pembayaran' => '',
            'status_pembayaran' => $this->request->getVar('status_pembayaran'),
            'id_order' => $this->orderModel->getInsertID(),
            'id_users' => $this->request->getVar('id_users')
        ]);
        return redirect()->to('userpanel');
    }
    public function update($id){
        $query =$this->pembayaranModel->where('id_order',$id)->set(['status_pembayaran'=>'diproses'])->update();
        return redirect()->to('userpanel');
    }
}
