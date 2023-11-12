<?php
namespace app\controller;

use app\model\entity\UserEntity;
use app\model\repository\DbUserRepository;

class User
{
    private \app\model\repository\UserRepositoryInterface $repository;
    public function __construct()
    {
        $this->repository = new \app\model\repository\DbUserRepository();
    }

    function createUser(): void
    {
        require "view".DIRECTORY_SEPARATOR."createUser.php";
    }

    function addUser(): void
    {
        $pseudo = $_POST['pseudo'];
        $password = $_POST ['password'];
        $status = $_POST['status'];
        $userC =  new UserEntity();
        $userC->setPseudo($pseudo);
        $userC->setPassword($password);
        $userC->setStatus($status);
        $this->repository->add($userC);
        require "view".DIRECTORY_SEPARATOR."login.php";
    }

    function login(): void
    {
        require "view".DIRECTORY_SEPARATOR."login.php";
    }

    function loginCheck(): void
    {
        $pseudo = $_POST['pseudo'];
        $password = $_POST ['password'];
        $user = $this->repository->findByPseudo($pseudo);

        if ($user !=null && $user->isValidPassword($password)) {
            session_start();
            $_SESSION["user"]=$user;
            echo "Bienvenue !";
            echo "<td><a href='../'>Menu</a></td>";
        }
    }
    function logout(): void
    {
        session_start();
        unset($_SESSION["user"]);
        header("Location: http://localhost:8080/devphp/MVC/app/");
    }

}
