<?php

namespace App\Repositories;

use App\Models\Agent;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AgentRepository
 * @package App\Repositories
 * @version February 27, 2019, 7:39 am UTC
 *
 * @method Agent findWithoutFail($id, $columns = ['*'])
 * @method Agent find($id, $columns = ['*'])
 * @method Agent first($columns = ['*'])
*/
class AgentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fullname',
        'sex',
        'email',
        'phone',
        'address'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Agent::class;
    }
}
