<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customer
 * @package App\Models
 * @version February 27, 2019, 7:48 am UTC
 *
 * @property string fullname
 * @property string address
 * @property string empstatus
 * @property string compaddress
 * @property string position
 * @property string phone
 * @property string email
 * @property string amount
 * @property string balance
 * @property string apertment
 * @property integer agent
 */
class Customer extends Model
{
    use SoftDeletes;

    public $table = 'customers';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'fullname',
        'address',
        'empstatus',
        'compaddress',
        'position',
        'phone',
        'email',
        'amount',
        'balance',
        'apertment',
        'agent'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fullname' => 'string',
        'address' => 'string',
        'empstatus' => 'string',
        'compaddress' => 'string',
        'position' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'amount' => 'string',
        'balance' => 'string',
        'apertment' => 'string',
        'agent' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fullname' => 'required',
        'address' => 'required',
        'empstatus' => 'required',
        'compaddress' => 'required',
        'position' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'amount' => 'required',
        'balance' => 'required',
        'apertment' => 'required'
    ];

    
}
