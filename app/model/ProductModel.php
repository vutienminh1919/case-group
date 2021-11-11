<?php

namespace App\model;

class ProductModel extends BaseModel
{
    protected string $table = "products";

    public function create($data)
    {
        $sql = "INSERT INTO $this->table(`name`,`price`,`description`,`category_id`,`image`) VALUES (?,?,?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["price"]);
        $stmt->bindParam(3, $data["description"]);
        $stmt->bindParam(4, $data["category_id"]);
        $stmt->bindParam(5, $data["image"]);
        $stmt->execute();
    }

    public function edit($data)
    {

        $sql = "UPDATE $this->table SET `name` = ?, `price` = ?, `description` = ?,`category_id`= ? where `id` = ?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["price"]);
        $stmt->bindParam(3, $data['description']);
        $stmt->bindParam(4, $data['category_id']);
        $stmt->bindParam(5, $data['id']);
        $stmt->execute();
    }

    public function getProduct()
    {
        $sql = "SELECT products.*, categories.name_category FROM products INNER Join categories on products.category_id = categories.id";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll();
    }

    public function search($id)
    {
        $sql = "select * from $this->table where name like %$id% or description like %$id%";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll();
    }

}