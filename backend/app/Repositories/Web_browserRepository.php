<?php

namespace App\Repositories;

use App\Models\Web_browser;
use App\Repositories\BaseRepository;

/**
 * Class Web_browserRepository
 * @package App\Repositories
 * @version July 14, 2022, 12:46 pm JST
*/

class Web_browserRepository extends BaseRepository
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
        return Web_browser::class;
    }
}
