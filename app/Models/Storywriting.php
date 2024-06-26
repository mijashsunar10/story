<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Storywriting extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'image',
        'title',
        'description',
        'slug',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,foreignKey:'user_id',ownerKey:'id');
    }
    public function review():HasMany
    {
        return $this->hasMany(review::class,foreignKey:'storywriting_id',localKey:'id');
    }
}
