<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserDetails extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'user_id',
        'phone',
        'address',
        'gender',
        'created_at',
        'updated_at',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,foreignKey:'user_id',ownerKey:'id');

    }
}
