<?php namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table='order';
    protected $primaryKey = 'id';
    protected $allowedFields=['id','nama_product','alamat','id_users'];
    protected $useTimestamps= true;
    
    public function getOrderData($userid){
        return $this->where('id_users',$userid)->findall();
    }
}