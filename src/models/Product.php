<?php

namespace App\Models;

use App\Models\Model;
use PDO; // on utilise la classe PDO dont le namespace a été défini

class Product extends Model
{
    private $name;
    private $description;
    private $brand;
    private $picture;
    private $price;

    public function findAll()
    {
        $sql = "SELECT * FROM product";

        $pdoStatement = $this->db->query($sql);
        $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Product::class);

        return $products;
    }

    public function findByBrand($brand)
    {
        $sql = "SELECT * FROM product WHERE brand = :brand";
        $pdoStatement = $this->db->prepare($sql);
        $pdoStatement->bindParam(':brand', $brand, PDO::PARAM_STR);
        $pdoStatement->execute();
        $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Product::class);

        return $products;
    }

    public function find($id)
    {
        $sql = "SELECT * FROM product WHERE id =  :id";
        $pdoStatement = $this->db->prepare($sql);
        $pdoStatement->bindParam(':id', $id, PDO::PARAM_INT);
        $pdoStatement->execute();
        $product = $pdoStatement->fetchObject(Product::class);

        return $product;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}
