<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Collection;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'title',
        'author',
        'status',
        'image',
        'description',
        'link',
    ];

    protected $casts = [
        'Categories_id' => 'array',
    ];

    protected function author(): Attribute
    {
        return Attribute::make(
            get: fn($value) => ucwords($value),
        );

    }

    /**
     * @return BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(
            Category::class,
            'category_has_news',
            'news_id',
            'category_id',
            'id',
            'id',
        );
    }

    /**
     * @return Collection
     */
    public function getNews(): Collection
    {
        return \DB::table('news')->select(['id', 'title', 'author', 'status', 'description', 'created_at'])->get();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getNewsById(int $id): mixed
    {
        return \DB::table('news')->find($id);
    }
}
