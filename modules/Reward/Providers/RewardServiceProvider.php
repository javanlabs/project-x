<?php

namespace Modules\Reward\Providers;

use Illuminate\Database\Eloquent\Factory;
use Laravolt\Support\Base\BaseServiceProvider;

class RewardServiceProvider extends BaseServiceProvider
{
    public function getIdentifier()
    {
        return 'reward';
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
                ->add('Reward', route('modules::reward.index'))
                ->data('icon', 'circle outline')
                ->data('permission', $this->config['permission'] ?? [])
                ->active('modules/reward/*');
        });
    }
}
