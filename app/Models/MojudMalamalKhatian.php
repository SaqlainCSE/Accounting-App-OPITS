<?php

namespace App\Models;

use App\Enums\CategoryEnum;
use Spatie\Enum\Laravel\HasEnums;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MojudMalamalKhatian extends Model
{
    use HasFactory, HasEnums;

    protected $fillable = [
        'date',
        'product_name',
        'category',
        'present_stock',
        'product_count',
        'product_price',
        'total_amount',
        'comments',
        'user_name',
    ];

    protected $enums = [
        'category' => CategoryEnum::class,
    ];

}
