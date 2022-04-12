<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon|null $updated_at
 */
class Store extends Model
{
    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class);
    }
}
