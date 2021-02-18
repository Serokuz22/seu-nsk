<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Orchid\Screen\AsSource;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;
    use AsSource;

    protected $fillable = [
        'user_id',
        'slug',
        'preview',
        'title',
        'head',
        'excerpt',
        'content',
        'keywords',
        'description',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'user_id'  => 'integer',
        'slug'  => 'string',
        'preview'  => 'string',
        'title'  => 'string',
        'head'  => 'string',
        'excerpt'  => 'string',
        'content'  => 'string',
        'keywords'  => 'string',
        'description'  => 'string',
        'is_published' => 'boolean',
        'published_at' => 'datetime:Y-m-d H:i:s',
    ];

    /**
     * Явно указываем формат вывода дат
     * @param DateTimeInterface $date
     * @return string
     */
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
