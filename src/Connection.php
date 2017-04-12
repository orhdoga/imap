<?php

namespace IMAP;

class Connection
{
    /**
     * Holds the login credentials
     *
     * @var string
     */
    protected $username, $password;

    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

}
