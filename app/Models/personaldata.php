<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class personaldata
 * @package App\Models
 * @version February 10, 2019, 2:16 pm UTC
 *
 * @property string residentialstatus
 * @property string emptype
 * @property string occupation
 * @property string workstatus
 * @property string employer
 * @property string dateemployed
 * @property string monthlysalary
 * @property string annualsalary
 * @property string propertytype
 * @property string declaration
 */
class personaldata extends Model
{
    use SoftDeletes;

    public $table = 'personaldatas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'userid',
        'residentialstatus',
        'emptype',
        'occupation',
        'workstatus',
        'employer',
        'dateemployed',
        'monthlysalary',
        'annualsalary',
        'propertytype',
        'declaration'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'residentialstatus' => 'string',
        'emptype' => 'string',
        'occupation' => 'string',
        'workstatus' => 'string',
        'employer' => 'string',
        'dateemployed' => 'string',
        'monthlysalary' => 'string',
        'annualsalary' => 'string',
        'propertytype' => 'string',
        'declaration' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'residentialstatus' => 'required',
        'emptype' => 'required',
        'occupation' => 'required',
        'workstatus' => 'required',
        'employer' => 'max:255',
        'dateemployed' => 'max:255',
        'monthlysalary' => 'max:255',
        'annualsalary' => 'max:255',
        'propertytype' => 'required',
        'declaration' => 'required'
    ];

    
}
