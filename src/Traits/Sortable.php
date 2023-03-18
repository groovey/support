<?php

namespace Groovey\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Sortable
{
    /**
     * Scope::latest()
     */
    public function scopeLatest(Builder $query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    /**
     * Scope::oldest()
     */
    public function scopeOldest(Builder $query)
    {
        return $query->orderBy('created_at', 'asc');
    }
}
