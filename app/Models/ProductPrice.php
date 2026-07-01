<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    use HasFactory;

    public const TYPE_SINGLE = 'single';
    public const TYPE_BUNDLE = 'bundle';

    protected $fillable = [
        'product_id',
        'package_name',
        'type',
        'price',
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function scopeSingle($query)
    {
        return $query->where('type', self::TYPE_SINGLE);
    }

    public function scopeBundle($query)
    {
        return $query->where('type', self::TYPE_BUNDLE);
    }

    public function isSingle(): bool
    {
        return $this->type === self::TYPE_SINGLE;
    }

    public function isBundle(): bool
    {
        return $this->type === self::TYPE_BUNDLE;
    }

    public static function typeOptions(): array
    {
        return [
            self::TYPE_SINGLE => 'Single',
            self::TYPE_BUNDLE => 'Bundle',
        ];
    }
}