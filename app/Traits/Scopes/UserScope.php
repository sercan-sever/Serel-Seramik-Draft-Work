<?php

namespace App\Traits\Scopes;

use App\Enums\RoleEnum;
use Illuminate\Database\Eloquent\Builder;

trait UserScope
{

    /**
     * @param Builder $query
     *
     * @return void
     */
    public function scopeAdmin(Builder $query): void
    {
        $query->role(RoleEnum::ADMIN->value);
    }

    /**
     * @param Builder $query
     *
     * @return void
     */
    public function scopeSuperAdmin(Builder $query): void
    {
        $query->role(RoleEnum::SUPER_ADMIN->value);
    }
}
