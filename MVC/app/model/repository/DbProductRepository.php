<?php

namespace app\model\repository;
use app\model\entity\ProductEntity;
use mysql_xdevapi\Exception;
use PDO;
use PDOException;

class DbProductRepository implements ProductRepositoryInterface
{
    private PDO $connexion;
    public function __construct()
    {
        $dsn = "sqlite:".CFG["db"]["host"].CFG["db"]["database"];
        $this->connexion = \system\SPDO::getInstance($dsn,
            CFG["db"]["login"],
            CFG["db"]["password"],
            CFG["db"]["options"],
            CFG["db"]["exec"])
            ->getConnexion();
    }
    public function findAll(): array
    {
        $stmt = $this->connexion->prepare("SELECT * FROM product");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS,ProductEntity::class);
    }
    public function findById(int $id): ?\app\model\entity\ProductEntity
    {

        $stmt = $this->connexion->prepare("SELECT * FROM product where id=:id");
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        $prod = new ProductEntity();
        if($res){
            $prod->setId($res["id"]);
            $prod->setName($res["name"]);
            $prod->setPrice($res["price"]);
            $prod->setQuantity($res["quantity"]);
            return $prod;
        }
        return null;
    }

    public function add(\app\model\entity\ProductEntity $product): ?ProductEntity
    {
        $stmt = $this->connexion->prepare("INSERT INTO product values({$product->getId()},'{$product->getName()}',{$product->getPrice()},{$product->getQuantity()})");
        try {
            $stmt->execute();
        }
        catch (PDOException $exception){
            echo '<pre>'.$exception->getMessage().'</pre>';
            return null;
        }
        return $this->findById($product->getId());
    }

    public function update(int $id, \app\model\entity\ProductEntity $product): void
    {
        $stmt = $this->connexion->prepare("UPDATE product set name=:name, price=:price, quantity=:quantity where id =:id");
        $stmt->bindParam(":id",$id);
        $name = $product->getName();
        $stmt->bindParam(":name",$name);
        $price = $product->getPrice();
        $stmt->bindParam(":price",$price);
        $quantity = $product->getQuantity();
        $stmt->bindParam(":quantity",$quantity);
        $stmt->execute();
    }

    public function delete(int $id): bool
    {
        $stmt = $this->connexion->prepare("DELETE FROM product where id=:id");
        $stmt->bindParam(":id",$id);
        return $stmt->execute();
    }
}
