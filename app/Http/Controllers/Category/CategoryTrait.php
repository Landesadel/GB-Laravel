<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\News\NewsTrait;

trait CategoryTrait
{
    use NewsTrait;

    /**
     * @return array
     */
    public function getCategoryList(): array
    {
        return $categoryCollection = ['Technology', 'Science', 'Business', 'Culture', 'Health', 'Stories'];
    }
}
