<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disc extends Model
{
    use HasFactory;

    protected $appends = ['custom_data_labels'];

    protected $fillable = ['publisher_name'];

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
