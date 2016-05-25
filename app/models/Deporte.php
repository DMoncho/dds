<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Deporte extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'deporte';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'nombre'
    ];
}
