<?php
namespace App\Controler;
use App\Model\ModelSanPham;
class controlSanPham{
    public $db;
    public $sotrang;
    public function __construct($pdo)
	{
        $this->db = $pdo;
	}
    public function trangSanPham($iddm,$page){
        $controlSanPham = new ModelSanPham($this->db);
        $allSanPham =$controlSanPham->getSanPhamTheoTrangDanhMuc($iddm,$page);
        return $allSanPham;
    }
}