<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Collection extends Model
{
    use HasFactory;

    protected $table = "collection";
    public $timestamps = false;

    protected $fillable = ['maker_id','name'];

    public function maker() : BelongsTo
    {
        return $this->belongsTo(maker::class);
    }

    public function knife():HasMany
    {
        return $this->hasMany(Knife::class);
    }
}