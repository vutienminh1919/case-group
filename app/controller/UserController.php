<?php

namespace App\controller;

use App\model\UserModel;

class UserController

{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $users = $this->userModel->getAll();
        include_once "app/view/user/list.php";

    }

    public function delete($id)
    {
        $this->userModel->delete($id);
        include_once "app/view/user/delete.php";
        header("Location:index.php?page=user-list");

    }

    public function getCustomer()
    {
        $customers = $this->userModel->getCustomer();
        include_once "app/view/user/list.php";

    }

}