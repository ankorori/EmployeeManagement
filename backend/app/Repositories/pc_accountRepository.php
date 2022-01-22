<?php

namespace App\Repositories;

use App\Models\pc_account;
use App\Repositories\BaseRepository;

/**
 * Class pc_accountRepository
 * @package App\Repositories
 * @version January 22, 2022, 2:25 pm JST
*/

class pc_accountRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'password',
        'settingdate',
        'account_name'
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
        return pc_account::class;
    }
}
