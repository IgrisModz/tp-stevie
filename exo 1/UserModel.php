<?php

class UserModel
{
    private $username;

    public function getUsername()
    {
        return $this->username;
    }

    public function save($userInfo)
    {
        $this->username = $userInfo['username'];
    }
}
