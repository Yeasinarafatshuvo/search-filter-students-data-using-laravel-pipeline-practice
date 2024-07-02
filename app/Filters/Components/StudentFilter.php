<?php

namespace App\Filters\Components;

use App\Filters\BaseFilter;
use App\Filters\Components\Age;
use App\Filters\Components\Gender;

class StudentFilter extends BaseFilter
{

    protected function getFilters(): array
    {
        return [
            Gender::class,
            Age::class,
        ];
    }
}
