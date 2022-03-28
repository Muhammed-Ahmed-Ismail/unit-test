<?php


use PHPUnit\Framework\TestCase;
use User\UserService;

class UserServiceTest extends TestCase
{
    private static UserService $user;

    public static function setUpBeforeClass(): void
    {
        self::$user = new UserService();
        self::$user->setName("Muhammed");
        self::$user->setEmail("Muhamemd@gmail.com");
    }

    public function testGetName()
    {
        $this->assertTrue(self::$user->getName()==="Muhammed");
    }
    public function testGetEmail()
    {
        $this->assertTrue(self::$user->getEmail()==="Muhamemd@gmail.com");
    }
    public function testSetName()
    {
        $newName="Ahmed";
        self::$user->setName($newName);
        $this->assertTrue(
            self::$user->getName()===$newName
        );
    }
    public function testSetEmail()
    {
        $newEmail="Ahmed@google.com";
        self::$user->setName($newEmail);
        $this->assertTrue(
            self::$user->getName()===$newEmail
        );
    }
}
