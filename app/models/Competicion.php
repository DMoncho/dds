<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Competicion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'competicion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id','nombre','id_deporte'
    ];
}
