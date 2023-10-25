<?php

namespace app\controller;


use app\model\repository\MemoryProductRepository;
use app\model\repository\ProductRepositoryInterface;

class Home
{
    private ProductRepositoryInterface $new;
    public function __construct()
    {
        $this->new = new MemoryProductRepository();

    }
    function index(): array
    {
        return $this->new->findAll();
    }
}