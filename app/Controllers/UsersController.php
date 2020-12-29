<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\PembayaranModel;
use Error;

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
        $result = $this->pembayaranModel->getPembayaranData(user_id());
        $data = array(
            'title' => 'Data Barang',
            'validation'=> \Config\Services::validation(),
            'result' => $result
        );
        return view('user/index', $data);
    }

    public function save()
    {
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
            'bukti_pembayaran' => 'profil1.png',
            'status_pembayaran' => $this->request->getVar('status_pembayaran'),
            'id_order' => $this->orderModel->getInsertID(),
            'id_users' => $this->request->getVar('id_users')
        ]);
        return redirect()->to('userpanel');
    }
    public function update($id)
    {
        if (!$this->validate([
            'bukti_pembayaran' => [
                'rules' => 'uploaded[bukti_pembayaran]|max_size[bukti_pembayaran,5024]|is_image[bukti_pembayaran]|mime_in[bukti_pembayaran,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'size terlalu besar',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'mime_in' => 'yang anda pilih bukan gambar'
                ]
            ]

        ])) {
            return redirect()->to('/userpanel')->withInput();
        }
        $filePembayaran= $this->request->getFile('bukti_pembayaran');
        
		if($filePembayaran->getError(4)){
			$namaFilePembayaran='profil1.png';
        }
        else{
			$namaFilePembayaran = $filePembayaran->getRandomName();
			$filePembayaran->move('img/bukti_pembayaran',$namaFilePembayaran);
		}var_dump($namaFilePembayaran);
        $this->pembayaranModel->where('id_order', $id)->set([
            'status_pembayaran' => 'diproses',
            'bukti_pembayaran'=>$namaFilePembayaran
        ])->update();
        return redirect()->to('userpanel');
    }
}
