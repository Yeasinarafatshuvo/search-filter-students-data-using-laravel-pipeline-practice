<?php

declare(strict_types=1);

namespace App\Filters\Components;

use Closure;

class Gender implements ComponentInterface
{
    public function handle(array $content, Closure $next): mixed
    {
        if (isset($content['params']['gender'])) {
            $content['builder']->where('GENDER', $content['params']['gender']);
        }

        return $next($content);
    }
}
