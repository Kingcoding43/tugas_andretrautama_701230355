<?php
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    public function testLoginSuccess()
    {
        $_POST['email'] = 'admin@gmail.com';
        $_POST['password'] = 'password123';

        ob_start();
        include __DIR__ . '/../login.php';
        $output = ob_get_clean();

        $this->assertStringNotContainsString('Email atau password salah', $output);
    }

    public function testLoginFailed()
    {
        $_POST['email'] = 'admin@gmail.com';
        $_POST['password'] = 'salah';

        ob_start();
        include __DIR__ . '/../login.php';
        $output = ob_get_clean();

        $this->assertStringContainsString('Email atau password salah', $output);
    }
}
