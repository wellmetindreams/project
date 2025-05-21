<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Knife extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'knife';
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
    
    public function knifeType(): BelongsTo
    {
        return $this->belongsTo(KnifeType::class);
    }

    public function maker(): BelongsTo
    {
        return $this->belongsTo(Maker::class);
    }

    public function collection(): BelongsTo
    {
        return $this->belongsTo(Collection::class);
    }
    
    public function primaryImage()  
    {
        return $this->hasOne( KnifeImage::class)
        ->oldestOfMany('position');
    }
    
    public function images():HasMany
    {
        return $this->hasMany(KnifeImage::class);
    }

    public function material(): BelongsTo
    {
        return $this->belongsTo(MaterialType::class);
    }

    public function country(): BelongsTo

    {
        return $this->belongsTo(Country::class);
    }
}