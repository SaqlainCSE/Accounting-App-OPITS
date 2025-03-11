<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'member_no',
        'member_name',
        'member_father_name',
        'member_mother_name',
        'member_nid',
        'member_address',
        'member_profession',
        'member_nominee_name',
        'nominee_nid',
        'nominee_relation',
        'image',
        'membership_date',
    ];
}
