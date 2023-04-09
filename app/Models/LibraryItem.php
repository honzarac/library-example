<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class LibraryItem extends Model
{
    use HasFactory;

    public function borrowable(): MorphTo
    {
        return $this->morphTo(__FUNCTION__, 'borrowable_type', 'borrowable_id');
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
