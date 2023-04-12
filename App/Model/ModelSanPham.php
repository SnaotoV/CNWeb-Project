<?php
namespace App\Model;
class ModelSanPham{
    private $db;
    public $id;
    public $tenSP; 
    public $img; 
    public $giatien;
    public $mota;
    public $iddm;

    public function __construct($pdo)
	{
        $this->db = $pdo;
	}
    public function countSanPhamTheoDanhMuc($iddm){
        return count($this->getSanPhamTheoDanhMuc($iddm));
    }
    public function getSanPhamTheoTrangDanhMuc($iddm,$page){
        $allSanPham = [];
        $statement = $this->db->prepare('call xuatSP(:iddm,:batdau,:ketthuc);');
        $statement->execute([
            "iddm"=>$iddm,
            "batdau"=>($page-1)*9,
            "ketthuc"=>($page)*9
        ]);
        while($row = $statement->fetch()){
            $SanPham = new ModelSanPham($this->db);
            $SanPham->fillFromSanPham($row);
            $allSanPham[]=$SanPham;
        }
        return $allSanPham;
    }
    public function getSanPhamTheoDanhMuc($iddm){
        $allSanPham = [];
        $k=1;
        $statement = $this->db->prepare('SELECT * FROM sanpham where iddm = :iddm');
        $statement->execute(array('iddm'=>$iddm));
        while($row = $statement->fetch()){
            $SanPham = new ModelSanPham($this->db);
            $SanPham->fillFromSanPham($row);
            $allSanPham[$k] =$SanPham;
            $k++;
        }
        return $allSanPham;
    }
    protected function fillFromSanPham(array $row)
	{
		[
			'id'=>$this->id,
            'tenSP'=>$this->tenSP, 
            'img'=>$this->img, 
            'giatien'=>$this->giatien,
            'mota'=>$this->mota,
            'iddm'=>$this->iddm
		] = $row;
		return $this;
	}
}