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
        if ($email = $request["email"] and $password = $request["password"]) {
            if ($this->userModel->checkLogin($email, $password)) {
                $user = $this->userModel->getByEmail($email);
                $_SESSION["username"] = $user["name"];
                $_SESSION["role"] = $user["role"];
                header("Location:index.php?page=home");
            } else {
                echo "<script>alert('Sai tài khoản hoặc mât khẩu');window.location.href='index.php?page=login'</script>";
            }
        } else {
            echo "<script>alert('Chưa nhập tài khoản và mật khẩu');window.location.href='index.php?page=login'</script>";
        }


    }


    public function logout()
    {
        unset($_SESSION["username"]);
        header("Location:index.php?page=login");

    }

    public function checkAuth()
    {
        if (!isset($_SESSION["username"])) {
            echo "<script>alert('Bạn cần đăng nhập !!');window.location.href='index.php?page=login'</script>";
        }

    }

    public function showFormRegister()
    {
        include_once "app/view/auth/register.php";
    }

    public function register($data)
    {
        if (isset($_POST['submit'])) {
            $data2 = [
                "name" => $_POST['name'],
                "email" => $_POST['email'],
                "password" => $_POST['password']
            ];
            try {
                $this->userModel->checkRegister($data2);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        echo "<script>alert('Đăng kí thành công!!');window.location.href='index.php?page=login'</script>";
    }
}

