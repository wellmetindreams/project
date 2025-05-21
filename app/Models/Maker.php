<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Maker extends Model
{

    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name'];

    public function knife(): HasMany
    {
        return $this->hasMany(Knife::class);
    }

    public function collection(): HasMany
    {
        return $this->hasMany(Collection::class);
    }    
}