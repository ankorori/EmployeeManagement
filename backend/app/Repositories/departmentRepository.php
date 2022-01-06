<?php

namespace App\Repositories;

use App\Models\department;
use App\Repositories\BaseRepository;

/**
 * Class departmentRepository
 * @package App\Repositories
 * @version January 6, 2022, 1:09 pm JST
*/

class departmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return department::class;
    }
}
