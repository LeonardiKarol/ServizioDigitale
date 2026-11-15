<?php

namespace App\Models;

use App\Enums\StatusTable;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['waiter_id', 'status', 'table_number'])]

class Order extends Model
{
    public function order_items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function waiter(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function casts(): array
    {
        return [
            'status' => StatusTable::class,
        ];
    }
}
