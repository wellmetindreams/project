<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KnifeImages extends Model
{
    public $timestamps = false;

    protected $fillable = [ 'knife_id', 'image_path']; 
}
