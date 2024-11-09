<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'travel_packages_id',
        'users_id',
        'NIK',
        'image',
        'transaction_total',
        'transaction_status'
    ];

    protected $hidden = [

    ];

    public function details(): HasMany
    {

        return $this->hasMany(TransactionDetail::class, 'transactions_id', 'id');
    }

    public function travel_packages(): BelongsTo
    {

        return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
    }

    public function users(): BelongsTo
    {

        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function galleries()
    {
        // relations 1travel memiliki banyak galery
        return $this->hasMany(Gallery::class, 'travel_packages_id', 'id');
    }

    public function bukti()
    {
        // relations 1travel memiliki banyak galery
        return $this->hasMany(BuktiTransaction::class, 'transactions_id', 'id');
    }

}
