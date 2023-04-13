<?php
namespace App\Model;
class ModelUser{
    private $db;
    public  $id;
    public  $taikhoan;
    public  $matkhau;
    public  $hoten;
    public  $email;
    public  $sdt;
    private  $user_type;

    public function __construct($pdo)
	{
        $this->db = $pdo;
	}
    public function getUserType(){
        return $this->user_type;
    }
    public function checkUser(){
        if(!$this->taikhoan){
            return false;
        }
        if(!$this->matkhau){
            return false;
        }
        return true;
    }
    public function getUsertheoTaiKhoan($User){
        $statement = $this->db->prepare('select * from nguoidung where taikhoan like :taikhoan and matkhau like :matkhau');
        $statement->execute(['taikhoan'=>$User['taikhoan'],'matkhau'=>$User['matkhau']]);
        if($row = $statement->fetch()){
            $this->fillFromUser($row);
        }
        return $this;
    }
    protected function fillFromUser(array $row)
	{
		[
			'id' => $this->id,
			'taikhoan' => $this->taikhoan,
			'matkhau' => $this->matkhau,
            'hoten' => $this->hoten,
            'email'=> $this->email,
            'sdt'=> $this->sdt,
            'user_type' => $this->user_type
		] = $row;
		return $this;
	}
}