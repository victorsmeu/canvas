<?php

namespace App;
use App\Plugin;

abstract class PluginAbstract
{
    protected $name;
    protected $plugin;

    abstract public function register();
    abstract public function unregister();

    public function getName()
    {
        return $this->name;
    }

    public function pluginExists()
    {
        return $this->plugin->where('name', '=', $this->name)->exists();
    }

    public function pluginIsActive()
    {
        $user = $this->plugin->where('name', '=', $this->name)->get();
        return $user->active;
    }
}