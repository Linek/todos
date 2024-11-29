<?php

namespace Todos;

use Illuminate\Support\ServiceProvider;

class TodosServiceProvider extends ServiceProvider
{
  public function boot()
  {
    $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    $this->loadViewsFrom(__DIR__ . '/resources/views', 'todos');

    $this->publishes([
      __DIR__ . '/database/migrations' => database_path('migrations'),
      __DIR__ . '/resources/views' => resource_path('views/vendor/todos'),
    ]);
  }

  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }
}
