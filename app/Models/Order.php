<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relantions\HasMany;
use Illuminate\Database\Eloquent\Relantions\BelongsTo;
use App\Models\User;
use App\Models\OrderItem;
use App\Enums\StatusTable;

#[Fillable(['waiter_id','status', 'table_number'])]

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
