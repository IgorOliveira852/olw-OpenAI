<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'seller_id',
        'status',
        'total_amount'
    ];

    protected $casts = [
        'status' => Status::class
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function seller(): BelongsTo
    {
        return $this->belongsTo(Seller::class);
    }
}
