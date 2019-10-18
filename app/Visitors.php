<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Visitors
 * @property string ip
 * @property string end_point
 * @property static created_at
 * @package App
 */
class Visitors extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ip', 'end_point', 'created_at'
    ];

    public $timestamps = false;

    /**
     * @var string
     */
    protected $table = 'visitors';
}
