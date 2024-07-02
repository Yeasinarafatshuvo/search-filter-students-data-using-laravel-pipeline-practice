<?php

namespace App\Filters;

use Illuminate\Pipeline\Pipeline;

abstract class BaseFilter
{
    abstract protected function getFilters(): array;

    public function getResults($contents)
    {
        $result = app(Pipeline::class)
            ->send($contents)
            ->through($this->getFilters())
            ->then(fn ($contents) => $contents['builder']);

        return $result->paginate(5)->withQueryString();
    }
}
