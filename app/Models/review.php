<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class review extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'comment',
        'ratings',
        'user_id',
       'story_id',

    ];
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class,foreignKey:'user_id',ownerKey:'id');

    }
    public function StoryWriting():BelongsTo
    {
        return $this->belongsTo(StoryWriting::class,foreignKey:'storywriting_id',ownerKey:'id');
    }
}
