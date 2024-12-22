<?php

namespace App\Enum;

enum ProductStatusEnum: string
{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
    case ARCHIVED = 'archived';

    public static function labels(): array
    {
        return [
            self::DRAFT->value => __('Draft'),
            self::PUBLISHED->value => __('Published'),
            self::ARCHIVED->value => __('Archived'),
        ];
    }

    public static function colors(): array
    {
        return [
            self::DRAFT->value => 'gray',
            self::PUBLISHED->value => 'success',
            self::ARCHIVED->value => 'warning',
        ];
    }
}
