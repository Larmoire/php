<?php
namespace app\controller;
class Product
{
    private \app\model\repository\ProductRepositoryInterface $repository;
    public function __construct()
    {
        $this->repository = new \app\model\repository\DbProductRepository();
    }
    function add(): void
    {
        require HOME."view".DIRECTORY_SEPARATOR."addProduct.php";
    }
    function addProduct(){
        //TODO
    }
    function display( array $params){


        //$params est positionné par le routeur
        //comme étant un tableau indexé contenant les paramètres
        require HOME.'view'.DIRECTORY_SEPARATOR.'displayProduct.php';
    }
    function update(array $params){
        //TODO
    }
    function updateProduct(){
        //TODO
    }
    function delete(array $params){
        //TODO
    }
}