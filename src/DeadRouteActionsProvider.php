<?php

namespace jrmadsen67\LaravelDeadRouteActions;

use Illuminate\Support\ServiceProvider;
use jrmadsen67\LaravelDeadRouteActions\Commands\DeadRouteActionsCommand;

class LaravelDeadRouteActionsProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
//        if ($this->app->runningInConsole()) {
//            $this->commands([
//                DeadRouteActionsCommand::class,
//            ]);
//        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->bind('command.test-factory-helper.generate',
//            function ($app) {
//                return new DeadRouteActionsCommand();
//            }
//        );
        $this->app->bind('command.refactor:dead-route-actions', DeadRouteActionsCommand::class);

        $this->commands('command.refactor:dead-route-actions');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
//    public function provides()
//    {
//        return array('command.test-factory-helper.generate');
//    }

}
