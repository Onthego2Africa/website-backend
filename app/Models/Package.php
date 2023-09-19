<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

        protected $fillable = [
        'title',
        'image',
        'plan_1_name',
        'plan_1_price',
        'plan_2_name',
        'plan_2_price',
        'plan_3_name',
        'plan_3_price',
        'plan_4_name',
        'plan_4_price',
    ];
}
