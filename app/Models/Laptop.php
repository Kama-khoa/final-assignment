<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
      use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'category_id',
        'manufactory_id',
        'quantity',
        'CPU',
        'VGA',
        'RAM',
        'hard_drive',
        'display',
        'battery',
        'weight',
        'material',
        'OS',
        'size',
        'ports',
        'keyboard',
        'audio',
        'network_and_connection',
        'security',
        'price',
        'status'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [

        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function manufactory()
    {
        return $this->belongsTo(Manufactory::class);
    }
}
