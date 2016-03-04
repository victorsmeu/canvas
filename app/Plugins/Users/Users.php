<?php

namespace App\Plugins\Users;


use App\PluginAbstract;
use App\Plugin;

class Users extends PluginAbstract
{
    protected $name = "users";

    public function __construct(Plugin $plugin)
    {
        $this->plugin = $plugin;
    }

    public function register()
    {
        if(!$this->pluginExists())
        {
            $this->plugin->insert(['name' => $this->name, 'active' => 1]);
        }
        else
        {
            $this->plugin->where('name', '=', $this->name)->update(['active' => 1]);
        }

        $table_users = new User();
        $table_users->createTable();
    }

    public function unregister()
    {
        $this->plugin->where('name', '=', $this->name)->update(['active' => 0]);
    }

    public function remove()
    {
        //Will remove plugin from db and files

    }
}