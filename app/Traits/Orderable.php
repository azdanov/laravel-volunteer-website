<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Orderable
{
    public function scopeLatestFirst(
        Builder $query,
        string $column = 'created_at',
        string $order = 'desc'
    ): Builder {
        return $query->orderBy($column, $order);
    }
}
