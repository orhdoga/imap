<?php

use IMAP\Connection;
use PHPUnit\Framework\TestCase;

class ConnectionTest extends TestCase
{
    /**
     * @test
     */
    public function check_if_getters_and_setters_for_auth_work()
    {
		$username = 'username';
		$password = 'password';

		$connection = new Connection;
		$connection->setUsername($username);
		$connection->setPassword($password);

		$this->assertEquals(
			$connection->getUsername(),
			$username
		);

		$this->assertEquals(
			$connection->getPassword(),
			$password
		);
    }
}
