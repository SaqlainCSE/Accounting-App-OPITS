<?php

namespace App\Models;

use App\Enums\CategoryEnum;
use Spatie\Enum\Laravel\HasEnums;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanchayaKhatian extends Model
{
    use HasFactory, HasEnums;

    protected $fillable = [
        'member_no',
        'member_name',
        'category',
        'sanchaya_aday',
        'asol_aday',
        'munafa_aday',
        'service_charge',
        'total',
        'comments',
        'user_name',
    ];

    protected $enums = [
        'category' => CategoryEnum::class,
    ];
}
