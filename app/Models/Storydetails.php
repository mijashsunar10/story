<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Storydetails extends Model
{
    use HasFactory;

    protected $fillable=
    [
        'title',
        'description',
        'main_characters',
        'author',
        'category_id',
        'user_id',
        'image',
        'audience',
        'language',
        'copyright',

    ];
    public function category(): BelongsTo
    
    {
        return $this->belongsTo(Category::class,foreignKey:'category_id',ownerKey:'id');
        // return $this->belongsTo(Category::class,foreignKey:'catego'
    }


}
