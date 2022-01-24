<?php

namespace App\Repositories;

use App\Models\Web_account;
use App\Repositories\BaseRepository;

/**
 * Class Web_accountRepository
 * @package App\Repositories
 * @version January 24, 2022, 3:02 pm JST
*/

class Web_accountRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'password',
        'note',
        'account_category_id'
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
        return Web_account::class;
    }
}
