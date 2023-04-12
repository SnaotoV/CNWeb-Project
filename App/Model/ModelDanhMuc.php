<?php
namespace App\Model;
class ModelDanhMuc{
    private $db;
    public $id;
    public $tenDM;
    public function __construct($pdo)
	{
        $this->db = $pdo;
	}
    public function getDanhMuc(){
        $allDanhMuc = [];
        $k=1;
        $statement = $this->db->prepare('select * from danhmuc');
        $statement->execute();
        while($row = $statement->fetch()){
            $DanhMuc = new ModelDanhMuc($this->db);
            $DanhMuc->fillFromDanhMuc($row);
            $allDanhMuc[$k] =$DanhMuc;
            $k++;
        }
        return $allDanhMuc;
    }
    protected function fillFromDanhMuc(array $row)
	{
		[
			'id' => $this->id,
			'tenDM' => $this->tenDM,
		] = $row;
		return $this;
	}
}