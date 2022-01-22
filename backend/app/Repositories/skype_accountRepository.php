<?php

namespace App\Repositories;

use App\Models\skype_account;
use App\Repositories\BaseRepository;

/**
 * Class skype_accountRepository
 * @package App\Repositories
 * @version January 22, 2022, 5:22 pm JST
*/

class skype_accountRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'account_name',
        'password'
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
        return skype_account::class;
    }
}
