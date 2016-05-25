<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'partido';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id_competicion', 'equipo_1', 'equipo_2',
    ];
}
