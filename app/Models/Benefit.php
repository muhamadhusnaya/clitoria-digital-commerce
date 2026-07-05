<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'icon',
        'status',
        'order_number',
    ];

    /**
     * Get the icon type (material or image) based on the icon value.
     */
    public function getIconTypeAttribute()
    {
        if ($this->icon && (str_contains($this->icon, '/') || str_contains($this->icon, '.'))) {
            return 'image';
        }
        return 'material';
    }
}
