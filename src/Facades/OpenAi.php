<?php

declare(strict_types=1);

namespace LaravelAdmin\LaravelOpenAi\Facades;

use Illuminate\Support\Facades\Facade;

class OpenAI extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'openai';
    }
}
