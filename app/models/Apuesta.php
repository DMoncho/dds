<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Apuesta extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'apuesta';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id', 'cantidad_apostada', 'pronostico',
    ];
}
