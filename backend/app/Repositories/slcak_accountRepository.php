<?php

namespace App\Repositories;

use App\Models\slcak_account;
use App\Repositories\BaseRepository;

/**
 * Class slcak_accountRepository
 * @package App\Repositories
 * @version January 22, 2022, 5:24 pm JST
*/

class slcak_accountRepository extends BaseRepository
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
        return slcak_account::class;
    }
}
