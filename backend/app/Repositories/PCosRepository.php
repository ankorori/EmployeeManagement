<?php

namespace App\Repositories;

use App\Models\PCos;
use App\Repositories\BaseRepository;

/**
 * Class PCosRepository
 * @package App\Repositories
 * @version January 21, 2022, 12:54 pm JST
*/

class PCosRepository extends BaseRepository
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
        return PCos::class;
    }
}
