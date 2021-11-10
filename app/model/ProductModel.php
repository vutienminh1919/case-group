<?php

namespace App\model;

class ProductModel extends BaseModel
{
    protected string $table = "products";

    public function create($data)
    {
        $sql = "INSERT INTO $this->table(`name`,`price`,`description`,`image`) VALUES (?,?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["price"]);
        $stmt->bindParam(3, $data["description"]);
        $stmt->bindParam(4, $data["image"]);
        $stmt->execute();
    }

    public function edit($data)
    {

        $sql = "UPDATE $this->table SET `name` = ?, `price` = ?, `description` = ?,`image` = ? where `id` = ?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["price"]);
        $stmt->bindParam(3, $data['description']);
        $stmt->bindParam(4, $data['image']);
        $stmt->bindParam(5, $data['id']);
        $stmt->execute();
    }
}