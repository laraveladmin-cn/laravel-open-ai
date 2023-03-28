<?php

declare(strict_types=1);

namespace LaravelAdmin\LaravelOpenAi;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Orhanerday\OpenAi\OpenAi;

/**
 * @internal
 */
class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(OpenAi::class, function (){
            $config = config('openai');
            $open_ai = new OpenAi($config['api_key']);
            if($config['base_uri']){
                $open_ai->setBaseURL($config['base_uri']);
            }
            if($config['proxy']){
                $open_ai->setProxy($config['proxy']);
            }
            if($config['headers']){
                $open_ai->setHeader($config['headers']);
            }
            if($config['organization']){
                $open_ai->setORG($config['organization']);
            }
            return $open_ai;
        });

        $this->app->alias(OpenAi::class, 'openai');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/openai.php' => config_path('openai.php'),
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array<int, string>
     */
    public function provides(): array
    {
        return [
            OpenAi::class,
        ];
    }
}
