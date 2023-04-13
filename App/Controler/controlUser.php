<?php
namespace App\Controler;
use App\Model\ModelUser;
class controlUser{
    public $db;
    public $errors=[];
    public function __construct($pdo)
	{
        $this->db = $pdo;
	}
    public function getErrors(){
        return $this->errors;
    }
    public function checkLogin(){
        $controlUser = new ModelUser($this->db);
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $User = $controlUser->getUsertheoTaiKhoan($_POST);
            if($User->checkUser()){
                $_SESSION['id']=$User->id;
                $_SESSION['user_type']=$User->getUserType();
                $_SESSION['hoten']=$User->hoten;
                $this->errors['login']='';
                redirect(BASE_URL_PATH.'Home');
            }
            else{
                $this->errors['login']='Sai tài khoản hoặc mật khẩu';
            }    
        } 
    }
}