<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use App\Models\OrderItem;
#[Fillable(['name','description','department','price'])]
class Product extends Model
{
    use SoftDeletes;
        
    public function order_items():HasMany
    {
        return $this->hasMany(orderItem::class);
     }

    protected function casts(): array
    {
        return [
            'department' => 'string',
            'price' => 'decimal:5',
        ];
    }
}
