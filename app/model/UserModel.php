<?php

namespace App\model;


class UserModel extends BaseModel
{
    protected string $table = 'users';

    public function checkLogin($email, $password)
    {
        $sql = "SELECT * FROM $this->table WHERE email = :email and password = :password";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
        return $stmt->rowCount() > 0;

    }

    public function getByEmail($email)
    {
        $sql = "SELECT * FROM $this->table WHERE email = :email";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        return $stmt->fetch();

    }

    public function getCustomer()
    {
        $sql = "SELECT * FROM $this->table WHERE `role` = 2";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll();
    }

    public function checkRegister($data)
    {
        $sql = "INSERT INTO $this->table (`name`,`email`,`password`) VALUES (?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["email"]);
        $stmt->bindParam(3, $data["password"]);
        $stmt->execute();
    }

}