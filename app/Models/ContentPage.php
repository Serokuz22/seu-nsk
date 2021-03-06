<?php
namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Orchid\Screen\AsSource;

class ContentPage extends Model
{
    use HasFactory;
    use SoftDeletes;
    use AsSource;

    protected $fillable = [
        'user_id',
        'slug',
        'title',
        'head',
        'excerpt',
        'content',
        'keywords',
        'description',
        'is_published',
        'published_at',
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
