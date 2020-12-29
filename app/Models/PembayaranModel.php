<?php namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table='pembayaran';
    protected $primaryKey = 'id';
    protected $allowedFields=['id','total_harga','metode_pembayaran','bukti_pembayaran','status_pembayaran', 'id_order','id_users'];
    protected $useTimestamps= true;
    public function getPembayaranData($userid){
        return $this->where('pembayaran.id_users',$userid)->join('order','order.id=pembayaran.id_order')->findall();
    }
    public function allPembayaran(){
        return $this->join('order','order.id=pembayaran.id_order')->findAll();
    }
}