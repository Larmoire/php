<?php


namespace app\model\repository;

use app\model\entity\ProductEntity;

class MemoryProductRepository implements ProductRepositoryInterface
{

    public function findAll(): array
    {
        $prod1 = new ProductEntity();
        $prod2 = new ProductEntity();
        $prod3 = new ProductEntity();

        return array($prod1,$prod2,$prod3);
    }
}