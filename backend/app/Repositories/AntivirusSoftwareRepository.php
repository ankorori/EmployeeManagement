<?php

namespace App\Repositories;

use App\Models\AntivirusSoftware;
use App\Repositories\BaseRepository;

/**
 * Class AntivirusSoftwareRepository
 * @package App\Repositories
 * @version July 17, 2022, 2:54 pm JST
*/

class AntivirusSoftwareRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ãname'
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
        return AntivirusSoftware::class;
    }
}
