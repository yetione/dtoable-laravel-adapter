<?php


namespace Yetione\DTOAdapter\Providers;


use Illuminate\Support\ServiceProvider;
use Yetione\DTO\Serializer;

class DTOServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Serializer::class);
        $this->app->alias(Serializer::class, 'dto.serializer');
    }
}