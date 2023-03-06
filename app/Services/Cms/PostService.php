<?php

namespace App\Services\Cms;

use App\Repositories\PostRepository;
use App\Services\Interfaces\Cms\PostInterface;

class PostService implements PostInterface
{
    public static function featured(int $limit = self::DEFAULT_LIMIT): array
    {
        $all_featured = PostRepository::getFeaturedPosts();

        return [];
    }
}
