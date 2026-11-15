<?php

namespace App\Models;

use App\Enums\Department;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['name', 'description', 'department', 'price'])]

class Product extends Model
{
    use SoftDeletes;

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    protected function casts(): array
    {
        return [
            'department' => Department::class,
            'price' => 'decimal:2',
        ];
    }
}
