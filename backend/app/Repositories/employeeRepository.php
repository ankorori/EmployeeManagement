<?php

namespace App\Repositories;

use App\Models\employee;
use App\Repositories\BaseRepository;

/**
 * Class employeeRepository
 * @package App\Repositories
 * @version December 23, 2021, 1:06 pm JST
*/

class employeeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'DepartmentId'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return employee::class;
    }
}
