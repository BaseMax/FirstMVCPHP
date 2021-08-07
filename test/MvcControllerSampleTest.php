<?php

use PHPUnit\Framework\TestCase;

use App\Controllers\HomeController;
use Core\Config;
use Core\Router;

final class MvcControllerSampleTest extends TestCase
{
    private static $autoloaderFilePath = __DIR__.'/../vendor/autoload.php';

    public static function setUpBeforeClass(): void
    {
        require_once self::$autoloaderFilePath;
    }

    public function testConfigGet()
    {
        $this->assertEquals(['assets'], Config::get('SERVE_DIRS'));
        $this->assertNull(Config::get('SERVE'));
    }

    public function testHomeControllerIndex()
    {
        ob_start();
        (new HomeController)->index();
        $this->assertEquals('Hello, World!', ob_get_clean());
    }
}
