<?php

namespace App\Repositories;

use App\Models\Office;
use App\Repositories\BaseRepository;

/**
 * Class OfficeRepository
 * @package App\Repositories
 * @version February 4, 2022, 12:47 pm JST
*/

class OfficeRepository extends BaseRepository
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
        return Office::class;
    }
}
