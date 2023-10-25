<?php


namespace app\model\repository;

use app\model\entity\ProductEntity;

class MemoryProductRepository implements ProductRepositoryInterface
{
    private array $produits;

    public function findAll(): array
    {
        $arr = array();
        foreach ($this->produits as $prod){
            $arr[] = $prod;
        }

        return $arr;
    }

    public function findById(int $id): ?\app\model\entity\ProductEntity
    {
        for($i =0; $i<=sizeof($this->produits)-1;$i++){
            if($this->produits[$i] instanceof ProductEntity) {
                if ($this->produits[$i]->getId() == $id) {
                    return $this->produits[$i];
                }
            }
        }
        return null;
    }

    public function add(\app\model\entity\ProductEntity $product): void
    {
        $this->produits[] = $product;

    }

    public function update(int $id, \app\model\entity\ProductEntity $product): void
    {
        for($i =0; $i<=sizeof($this->produits)-1;$i++){
            if($this->produits[$i] instanceof ProductEntity){
                if($this->produits[$i]->getId() ==$id){
                    $this->produits[$i] = $product;
                }
            }

        }
    }

    public function delete(int $id): bool
    {
        for($i =0; $i<=sizeof($this->produits)-1;$i++){
            if($this->produits[$i] instanceof ProductEntity) {
                if ($this->produits[$i]->getId() == $id) {
                    unset($this->produits[$i]);
                    return true;
                }
            }
        }
        return false;
    }
}