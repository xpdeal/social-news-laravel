<?php

namespace App\Models\Cms;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static create(array $data)
 * @method static paginate(int $int)
 */
class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'active',
        'uuid',
        'title',
        'description',
        'post_content',
        'metadata',
        'published_at',
        'slug'
    ];

    protected $casts = [
        'metadata' => 'array',
        'published_at' => 'datetime'
    ];
}
