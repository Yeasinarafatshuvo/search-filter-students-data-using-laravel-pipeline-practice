<?php

declare(strict_types=1);

namespace App\Filters\Components;

use Closure;

class Age implements ComponentInterface
{
    public function handle(array $content, Closure $next): mixed
    {
        if (isset($content['params']['age'])) {
            $content['builder']->where('AGE', $content['params']['age']);
        }

        return $next($content);
    }
}
