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
    public function trangSanPham($page){
        $controlSanPham = new ModelSanPham($this->db);
        $allSanPham =$controlSanPham->getTrangSanPham($page);
        return $allSanPham;
    }
    public function soTrangSanPham($iddm){
        $controlSanPham = new ModelSanPham($this->db);
        return ceil($controlSanPham->countSanPham()/9);
    }
    public function trangSanPhamDM($iddm,$page){
        $controlSanPham = new ModelSanPham($this->db);
        $allSanPham =$controlSanPham->getSanPhamTheoTrangDanhMuc($iddm,$page);
        return $allSanPham;
    }
    public function soTrangSanPhamDM($iddm){
        $controlSanPham = new ModelSanPham($this->db);
        return ceil($controlSanPham->countSanPhamTheoDanhMuc($iddm)/9);
    }
    public function chiTietSanPham($id){
        $controlSanPham = new ModelSanPham($this->db);
        return $controlSanPham->getChiTietSanPham($id);
    }
}