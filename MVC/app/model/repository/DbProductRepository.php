<?php

namespace app\model\repository;
use app\model\entity\ProductEntity;
use PDO;

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
        $res = $stmt->fetchAll(PDO::FETCH_CLASS,ProductEntity::class);
        return $res;
    }

    public function findById(int $id): ?\app\model\entity\ProductEntity
    {
        $stmt = $this->connexion->prepare("SELECT * FROM product where id=:id");
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC, ProductEntity::class);
    }

    public function add(\app\model\entity\ProductEntity $product)
    {
        // TODO: Implement add() method.
    }

    public function update(int $id, \app\model\entity\ProductEntity $product)
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id): bool
    {
        // TODO: Implement delete() method.
    }
}
