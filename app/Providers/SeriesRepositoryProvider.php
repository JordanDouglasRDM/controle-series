<?php

namespace App\Providers;

use App\Repositories\EloquentSeriesRepository;
use App\Repositories\SeriesRepository;
use Illuminate\Support\ServiceProvider;

class SeriesRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function bind()
    {

    }
    public function register(): void
    {
        $this->app->bind(SeriesRepository::class, EloquentSeriesRepository::class);
        //sempre que eu precisar da minha interface SeriesRepository, eu vou usar a classe EloquentSeriesRepository.
        //isso ensina o service container a instanciar um repository
    }

}
