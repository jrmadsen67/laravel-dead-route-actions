<?php

namespace jrmadsen67\LaravelDeadRouteActions\Console;

use Illuminate\Console\Command;
use Illuminate\Routing\Route;
use Illuminate\Routing\Router;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputOption;

class DeadRouteActionsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'refactor:dead-route-actions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Looks for any routes where the controller and/or function no longer exists';
}
