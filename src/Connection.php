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

    /**
     * Sets the username used for authentication by the Connection
     *
     * @param string $username the username
     */
    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    /**
     * Returns the username specified for authentication
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the password used for authentication by the Connection
     *
     * @param string $password the password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * Returns the password specified for authentication
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

}
