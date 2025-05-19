<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KnifeImage extends Model
{
    public $timestamps = false;

    protected $fillable = [ 'knife_id', 'image_path', 'position'];

    public function Knife():BelongsTo
    {
        return $this->belongsTo(Knife::class);
    }
}