<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Orchid\Screen\AsSource;

class Banner extends Model
{
    use HasFactory;
    use SoftDeletes;
    use AsSource;

    protected $fillable = [
        'name',
        'banner',
        'url',
        'position',
        'active'
    ];

    protected $casts = [
        'position' => 'integer',
        'banner' => 'string',
        'name' => 'string',
        'url' => 'string',
        'active'  => 'boolean',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
