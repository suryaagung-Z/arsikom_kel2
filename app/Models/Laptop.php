<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'description',
        'processor',
        'ram',
        'storage',
        'graphics',
        'display',
        'operating_system',
        'connectivity',
        'ports',
        'battery',
        'photo',
        'advantages',
    ];
}
