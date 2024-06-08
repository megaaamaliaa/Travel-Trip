<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'transactions_id',
        'username',
        'image',
        'nationality',
        'NIK',
    ];

    protected $hidden = [

    ];

    public function transactions(): BelongsTo
    {

        return $this->belongsTo(Transaction::class, 'transactions_id', 'id');
    }

    public function users(): BelongsTo
    {

        return $this->belongsTo(User::class, 'users_id', 'id');
    }

}
