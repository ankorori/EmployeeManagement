<?php

namespace App\Repositories;

use App\Models\gmail_account;
use App\Repositories\BaseRepository;

/**
 * Class gmail_accountRepository
 * @package App\Repositories
 * @version January 22, 2022, 5:12 pm JST
*/

class gmail_accountRepository extends BaseRepository
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
        return gmail_account::class;
    }
}
