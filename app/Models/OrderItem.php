<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relantions\BelongsTo;
use App\Models\Order;
use App\Models\Product;
use App\Enums\StatusProduct;

#[Fillable(['order_id', 'product_id','quantity', 'unit_price','status_product'])]

class OrderItem extends Model
{
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class)->withTrashed();
    }

    protected function casts(): array
    {
        return [
            'unit_price' => 'decimal:2',
            'status_product' => StatusProduct::class,
        ];
    }
}
