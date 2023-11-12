<?php
namespace app\controller;
use app\model\entity\ProductEntity;

class Product
{
    private \app\model\repository\ProductRepositoryInterface $repository;
    public function __construct()
    {
        $this->repository = new \app\model\repository\DbProductRepository();
    }
    function index(): void
    {
        $tab = $this->repository->findAll();
        require HOME.'view'.DIRECTORY_SEPARATOR.'home.php';

    }
    function add(): void
    {
        session_start();
        if($_SESSION["user"]->getStatus()!="Administrator") {
            require HOME."view".DIRECTORY_SEPARATOR."accessDenied.php";
        }
        else {
            require HOME."view".DIRECTORY_SEPARATOR."addProduct.php";
        }
    }
    function addProduct(): void
    {
        $product = new ProductEntity();
        foreach ($_POST as $cle => $value) {
            $methode = "set".$cle;
            $product->$methode($value);
        }
        $res = $this->repository->add($product) ?: "Création impossible";
        $arrayOfProd = [$res];
        require HOME.'view'.DIRECTORY_SEPARATOR.'displayProduct.php';
    }
    function display(array $params): void
    {
        $arrayOfProd = [];
        foreach ($params as $id){
            if($this->repository->findById($id))
                $arrayOfProd[] = $this->repository->findById($id);
        }
        require HOME.'view'.DIRECTORY_SEPARATOR.'displayProduct.php';
    }
    function update(array $params): void
    {
        session_start();
        if($_SESSION["user"]->getStatus()!="Administrator") {
            require HOME."view".DIRECTORY_SEPARATOR."accessDenied.php";
        }
        else {
            $prod = $this->repository->findById(intval($params[0]));
            require HOME."view".DIRECTORY_SEPARATOR."updateProduct.php";
        }
    }
    function updateProduct(): void
    {
        $product = new ProductEntity();
        foreach ($_POST as $cle => $value) {
            $methode = "set".$cle;
            $product->$methode($value);
        }
        $this->repository->update($product->getId(), $product);
        $url = CFG["siteURL"];
        header("Location: ".$url."Product/display/{$product->getId()}");

    }
    function delete(array $params): void
    {
        session_start();
        if($_SESSION["user"]->getStatus()!="Administrator") {
            require HOME."view".DIRECTORY_SEPARATOR."accessDenied.php";
        }
        else {
            $this->repository->delete(intval($params[0]));
            $url = CFG["siteURL"];
            header("Location: ".$url."Product/");
        }
    }
}