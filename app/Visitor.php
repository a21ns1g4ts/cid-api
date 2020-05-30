<?php
/**
 * Created by Atila Silva.
 * Date: sáb, ou 2019 21:59:18 +0000.
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Visitor
 *
 * @property string ip
 * @property string end_point
 * @property string created_at
 * @package App
 */
class Visitor extends Model
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'visitors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ip', 'end_point', 'created_at'
    ];

    /**
     * Timestamps
     * @var bool
     */
    public $timestamps = false;
}
