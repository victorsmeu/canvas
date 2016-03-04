<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Canvas;
use App\Plugin;
use App\Plugins\Users\Users;

class CanvasTest extends TestCase
{
    public function testCanvas()
    {
        $canvas = new Canvas();
        $plugin = new Plugin();
        $users_plugin = new Users($plugin);
        $users_plugin->register();

        $canvas->loadPlugins($users_plugin);

        print_r($canvas->getPlugins());
    }
}