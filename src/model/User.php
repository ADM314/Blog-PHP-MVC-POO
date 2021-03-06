<?php

namespace App\src\model;

class User
{
    private $id;

    private $username;

    private $email;

    private $password;

    private $role;

    private $privilege;


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getUsername()
    {
        return $this->username;
    }


    public function setUsername($username)
    {
        $this->username = $username;
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPrivilege()
    {
        return $this->privilege;
    }

    public function setPrivilege($privilege)
    {
        $this->role = $privilege;
    }


    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }
}

