<?php
use PHPUnit\Framework\TestCase;

class RegisterTest extends TestCase
{
    public function testEmptyField()
    {
        $_POST['nama'] = '';
        $_POST['email'] = '';
        $_POST['password'] = '';

        ob_start();
        include __DIR__ . '/../register.php';
        $output = ob_get_clean();

        $this->assertStringContainsString('Semua kolom wajib diisi', $output);
    }
}
