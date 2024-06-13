<?php

namespace Homeful\Payments\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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