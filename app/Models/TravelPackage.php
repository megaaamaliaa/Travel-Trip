<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
    use HasFactory;
    use SoftDeletes;

    // menyimpan langsung
    protected $fillable = [
        'title',
        'slug',
        'location',
        'about',
        'featured_event',
        'language',
        'foods',
        'departure_date',
        'duration',
        'type',
        'price',
    ];
    protected $hidden = [

    ];

    public function galleries()
    {
        // relations 1travel memiliki banyak galery
        return $this->hasMany(Gallery::class, 'travel_packages_id', 'id');
    }
}
