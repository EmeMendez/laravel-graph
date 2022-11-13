<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;
use GraphQL\Type\Definition\ResolveInfo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id'
    ];

    // protected static function boot() {
    //         parent::boot();

    //         static::creating(function ($post) {
    //             $post->title    = trim($post->title);
    //             $post->slug     = Str::slug($post->title);
    //         });
    //         static::updating(function ($post) {
    //             $post->title    = trim($post->title);
    //             $post->slug     = Str::slug($post->title);
    //         });
    // }
    /**
     * Get the user that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
