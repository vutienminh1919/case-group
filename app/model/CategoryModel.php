<?php
namespace App\model;
class CategoryModel extends BaseModel
{
   protected string $table = "categories";

    public function create($data)
    {
        $sql = "INSERT INTO $this->table (`name_category`) VALUES (?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data["name_category"]);
        $stmt->execute();
    }

    public function edit($data)
    {

        $sql = "UPDATE $this->table SET `name_category` = ? where `id` = ?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data["name_category"]);
        $stmt->bindParam(2, $data['id']);
        $stmt->execute();
    }
}