<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KnifeImage extends Model
{
    use HasFactory;


    protected $fillable = [ 'knife_id', 'image_path', 'position'];

    public function Knife():BelongsTo
    {
        return $this->belongsTo(Knife::class)->where('position', 1);
    }
}