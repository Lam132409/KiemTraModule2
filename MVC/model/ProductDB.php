<?php

namespace connected;


class ProductDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }


    public function create($product)
    {
        $sql = "INSERT INTO products(name,category,price,,amount,date,description) VALUES (?,?,?,?,?,?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product->name);
        $statement->bindParam(2, $product->category);
        $statement->bindParam(3, $product->price);
        $statement->bindParam(4, $product->amount);
        $statement->bindParam(5, $product->date);
        $statement->bindParam(6, $product->description);
        $statement->execute();
    }


    public function listProduct()
    {
        $sql = "SELECT * FROM products";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $products = [];
        foreach ($result as $row) {
            $product = new Product($row['name'], $row['category'], $row['price'], $row['amount'], $row['date'], $row['description']);
            $product->id = $row['id'];
            $products[] = $product;
        }
        return $products;
    }

    public function search($keyword)
    {
        $sql = "SELECT * FROM products WHERE `name` LIKE '%$keyword%'";
        $statement = $this->connection->query($sql);
        return $statement->fecthAll();
    }

    public function get($id)
    {
        $sql = "SELECT * FROM products WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $product = new Product($row['name'], $row['category'], $row['price'], $row['amount'], $row['date'], $row['description']);
        $product->id = $row['id'];
        return $product;
    }


    public function update($id, $product)
    {
        $sql = "UPDATE products SET name = ?, category= ?, price = ?, amount = ?, date = ?, description = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product->name);
        $statement->bindParam(2, $product->category);
        $statement->bindParam(3, $product->price);
        $statement->bindParam(4, $product->amount);
        $statement->bindParam(5, $product->date);
        $statement->bindParam(6, $product->description);
        $statement->bindParam(7, $id);
        return $statement->execute();
    }


    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }


}