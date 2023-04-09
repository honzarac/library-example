<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class LibraryItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $appends = ['type_label'];

    protected $fillable = [
        'description',
        'author_id',
        'name',
    ];

    public static $typeLabels = [
        Disc::class => 'CD',
        Magazine::class => 'časopis',
        Book::class => 'kniha',
    ];

    public function borrowable(): MorphTo
    {
        return $this->morphTo(__FUNCTION__, 'borrowable_type', 'borrowable_id');
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function typeLabel(): Attribute
    {
        return Attribute::make(
            get: fn () => self::$typeLabels[$this->borrowable_type],
        );
    }
}
