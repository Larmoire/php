<?php
namespace app\model\entity;
class UserEntity
{

    private string $pseudo;
    private string $password;
    private string $status;

    public function isValidPassword(string $password):bool {
        return password_verify($password, $this->password);
    }

    /**
     * @return string
     */
    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    /**
     * @param string $pseudo
     */
    public function setPseudo(string $pseudo): void
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return false|string|null
     */
    public function getPassword(): bool|string|null
    {
        return $this->password;
    }

    /**
     * @param bool|string|null $password
     */
    public function setPassword(bool|string|null $password): void
    {
        $this->password =password_hash($password, PASSWORD_DEFAULT);
    }

    /**
     * @param bool|string|null $password
     */
    public function setEncryptedPassword(bool|string|null $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}
