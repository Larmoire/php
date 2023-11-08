<?php

namespace app\controller;


use app\model\repository\DbProductRepository;
use app\model\repository\MemoryProductRepository;
use app\model\repository\ProductRepositoryInterface;

class Home
{
    private ProductRepositoryInterface $new;
    public function __construct()
    {
        $this->new = new DbProductRepository();
    }
    function index(): void
    {
        $tab = $this->new->findAll();
        require HOME.'view'.DIRECTORY_SEPARATOR.'home.php';
    }
}