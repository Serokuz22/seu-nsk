<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Orchid\Screen\AsSource;

class Price extends Model
{
    use HasFactory;
    use SoftDeletes;
    use AsSource;

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'position',
        'name',
        'excerpt',
        'price',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'position' => 'integer',
        'name' => 'string',
        'excerpt' => 'string',
        'price'  => 'string',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
