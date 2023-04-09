<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    use HasFactory;

    protected $appends = ['custom_data_labels'];

    public function libraryItem()
    {
        return $this->morphOne(LibraryItem::class, 'borrowable');
    }

    public function customDataLabels(): Attribute
    {
        return Attribute::make(
            get: fn () => ['publisher_name' => 'Vydavatelství'],
        );
    }
}
