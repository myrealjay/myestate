<?php

namespace App\Repositories;

use App\Models\personaldata;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class personaldataRepository
 * @package App\Repositories
 * @version February 10, 2019, 2:16 pm UTC
 *
 * @method personaldata findWithoutFail($id, $columns = ['*'])
 * @method personaldata find($id, $columns = ['*'])
 * @method personaldata first($columns = ['*'])
*/
class personaldataRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return personaldata::class;
    }
}
