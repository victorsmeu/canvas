<?php

namespace App;

class Canvas implements ConsistencyInterface
{
    protected $plugins = [];

    public function checkConsistency()
    {
        // TODO: Implement checkConsistency() method.
    }

    public function loadPlugins($plugin)
    {
        $plugin_name = $plugin->getName();
        $this->plugins[$plugin_name] = $plugin;
    }

    public function getPlugins()
    {
        return $this->plugins;
    }

    public function show()
    {

    }
}