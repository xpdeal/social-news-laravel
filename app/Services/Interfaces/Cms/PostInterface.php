<?php

namespace App\Services\Interfaces\Cms;

interface PostInterface
{
    public const DEFAULT_LIMIT = 10;

    public static function featured(int $limit = self::DEFAULT_LIMIT): array;
}
