<?php

namespace app\model\repository;
use app\model\entity\ProductEntity;

Interface ProductRepositoryInterface
{
    public function findAll(): array;
    public function findById(int $id):
    ?\app\model\entity\ProductEntity;
    public function add(\app\model\entity\ProductEntity $product);
    public function update(int $id, \app\model\entity\ProductEntity $product);
    public function delete(int $id): bool;
}
