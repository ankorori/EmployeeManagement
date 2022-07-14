<?php

namespace App\Repositories;

use App\Models\Device;
use App\Repositories\BaseRepository;

/**
 * Class DeviceRepository
 * @package App\Repositories
 * @version February 4, 2022, 1:36 pm JST
*/

class DeviceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'devics_number',
        'company',
        'pc_name',
        'ostype_id',
        'is_cd_dvd_drive',
        'is_wired_LAN',
        'is_wireless_LAN',
        'is_internet',
        'is_taking_out',
        'is_LanScopeCat',
        'web_browser_id',
        'mailer_id',
        'antivirus_software_id'
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
        return Device::class;
    }
}
