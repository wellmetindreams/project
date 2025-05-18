<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Knives extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'maker_id',
        'collection_id',
        'knife_type',
        'price',
        'full_length',
        'blade_length',
        'blade_width',
        'butt_thickness',
        'weight',
        'material',
        'country',
        'description'
    ];

}
