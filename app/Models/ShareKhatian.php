<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShareKhatian extends Model
{
    use HasFactory;

    protected $fillable = [
        'member_no',
        'member_name',
        'share_number',
        'share_total_price',
        'share_kisti_aday_amount',
        'share_kisti_aday_date',
        'share_return_amount',
        'share_return_date',
        'baki',
        'comments',
        'user_name',
    ];
}
