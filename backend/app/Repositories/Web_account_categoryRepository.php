<?php

namespace App\Repositories;

use App\Models\Web_account_category;
use App\Repositories\BaseRepository;

/**
 * Class Web_account_categoryRepository
 * @package App\Repositories
 * @version January 24, 2022, 3:08 pm JST
*/

class Web_account_categoryRepository extends BaseRepository
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
        return Web_account_category::class;
    }
}
