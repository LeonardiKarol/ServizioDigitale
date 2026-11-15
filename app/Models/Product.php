<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relantions\HasMany;
use App\Models\OrderItem;

#[Fillable(['name','description','department','price'])]

class Product extends Model
{
    use SoftDeletes;
        
    public function orderItems():HasMany
    {
        return $this->hasMany(orderItem::class);
     }

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
        ];
    }
}
