<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Agent
 * @package App\Models
 * @version February 27, 2019, 7:39 am UTC
 *
 * @property string fullname
 * @property string sex
 * @property string email
 * @property string phone
 * @property string address
 */
class Agent extends Model
{
    use SoftDeletes;

    public $table = 'agents';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'fullname',
        'sex',
        'email',
        'phone',
        'address'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fullname' => 'string',
        'sex' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'address' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fullname' => 'required',
        'sex' => 'required',
        'email' => 'required|unique:agents',
        'phone' => 'required',
        'address' => 'required'
    ];

    
}
