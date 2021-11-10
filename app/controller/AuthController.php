<?php
namespace App\controller;


use App\model\UserModel;
use PDOException;

class AuthController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function showFormLogin()
    {
        include_once "app/view/auth/login.php";
    }

    public function login($request)
    {
        $email = $request["email"];
        $password = $request["password"];
        if ($this->userModel->checkLogin($email, $password)) {
          $user = $this->userModel->getByEmail($email);
           $_SESSION["username"] = $user["name"];
            header("Location:index.php");
        }else{
            var_dump("tai khoan khong dung");
        }

    }

    public function showFormRegister()
    {
        include_once "app/view/auth/register.php";
    }

    public function logout()
    {
        unset($_SESSION["username"]);
        header("Location:index.php?page=login");
        
    }

    public function checkAuth()
    {
        if (!isset($_SESSION["username"])){
            header("Location:index.php?page=login");
        }

    }

}