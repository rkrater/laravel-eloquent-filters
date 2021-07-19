<?php

namespace Pricecurrent\LaravelEloquentFilters\Tests\Filters;

use Illuminate\Database\Eloquent\Builder;
use Pricecurrent\LaravelEloquentFilters\AbstractQueryFilter;

class LikeFilter extends AbstractQueryFilter
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function apply(Builder $query): Builder
    {
        return $query->where($this->field(), 'like', "%$this->value%");
    }
}
