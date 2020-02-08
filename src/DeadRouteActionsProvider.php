<?php

namespace jrmadsen67\LaravelDeadRouteActions;

use Illuminate\Support\ServiceProvider;

class LaravelDeadRouteActionsProvider extends ServiceProvider
{

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->commands([
                DeadRouteActionsCommand::class,
            ]);
        }
    }

}
