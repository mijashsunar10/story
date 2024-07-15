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
        'stroydetails_id',
        'category_id',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,foreignKey:'user_id',ownerKey:'id');
    }

    public function StoryDetails(): BelongsTo
    {
        return $this ->belongsTo(Storydetails::class,foreignKey:'storydetails_id',ownerKey:'id');
    }

     public function category(): BelongsTo
     {
        return $this ->belongsTo(Category::class,foreignKey:'category_id',ownerKey:'id');
     }
     
    public function review():HasMany
    {
        return $this->hasMany(review::class,foreignKey:'storywriting_id',localKey:'id');
    }
}
