<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'travel_packages_id',
        'image',
    ];

    protected $hidden = [

    ];

    public function travel_packages(): BelongsTo
    {
        // 1galerry hanya 1travel
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
    }
}
