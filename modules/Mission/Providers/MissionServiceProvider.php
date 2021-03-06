<?php

namespace Modules\Mission\Providers;

use Laravolt\Support\Base\BaseServiceProvider;

class MissionServiceProvider extends BaseServiceProvider
{
    public function getIdentifier()
    {
        return 'mission';
    }

    public function register()
    {
        $file = $this->packagePath("config/{$this->getIdentifier()}.php");
        $this->mergeConfigFrom($file, "modules.{$this->getIdentifier()}");
        $this->publishes([$file => config_path("modules/{$this->getIdentifier()}.php")], 'config');

        $this->config = collect(config("modules.{$this->getIdentifier()}"));
    }

    protected function menu()
    {
        app('laravolt.menu.sidebar')->register(function ($menu) {
            $menu->modules
                ->add('Mission', route('modules::mission.index'))
                ->data('icon', 'circle outline')
                ->data('permission', $this->config['permission'])
                ->active('modules/mission/*');
        });
    }
}
