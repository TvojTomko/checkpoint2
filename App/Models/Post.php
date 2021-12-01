<?php

namespace App\Models;

class Post extends \App\Core\Model
{
    public function __construct(public int $id=0, public ?string $email= null,
                                public ?string $username=null, public ?string $password=null)
    {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    static public function setDbColumns()
    {
        return ['id','email', 'username', 'password'];
    }

    static public function setTableName()
    {
        return "registeredusers";
    }
}