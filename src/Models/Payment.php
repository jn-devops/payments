<?php

namespace Homeful\Payments\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['amount'];

    protected static function newFactory()
    {
        $modelName = static::class;
        $path = 'Homeful\\Payments\\Database\\Factories\\'.class_basename($modelName).'Factory';

        return app($path)->new();
    }
}
