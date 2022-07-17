<?php

namespace App\Repositories;

use App\Models\Mailer;
use App\Repositories\BaseRepository;

/**
 * Class MailerRepository
 * @package App\Repositories
 * @version July 17, 2022, 2:47 pm JST
*/

class MailerRepository extends BaseRepository
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
        return Mailer::class;
    }
}
