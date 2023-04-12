<?php
namespace App\Controler;
use App\Model\ModelDanhMuc;
use App\Model\ModelSanPham;
use App\Controler\controlSanPham;
class Router{
    public $db;   
    public function __construct($pdo)
	{
        $this->db = $pdo;
	}
    public function Router($Url){
        if($Url === '/'){
            exit(require_once '../Views/Home.php');
        }
        $ModelDanhMuc = new ModelDanhMuc($this->db);
        $allDanhMuc = $ModelDanhMuc->getDanhMuc();
        $controlSanPham = new ModelSanPham($this->db);
        $allSanPham =$controlSanPham->getSanPhamTheoTrangDanhMuc('DL',1);
        require_once '../Views/'.$Url.'.php';
    }
}