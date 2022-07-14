<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @SWG\Definition(
 *      definition="Device",
 *      required={"devics_number", "company", "pc_name", "ostype_id"},
 *      @SWG\Property(
 *          property="devics_number",
 *          description="devics_number",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="company",
 *          description="company",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="pc_name",
 *          description="pc_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Device extends \Illuminate\Database\Eloquent\Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'devices';

    protected $dates = ['deleted_at'];

    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'devics_number' => 'string',
        'company' => 'string',
        'pc_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'devics_number' => 'required|max:20',
        'company' => 'required|max:20',
        'pc_name' => 'required|max:20',
        'ostype_id' => 'required'
    ];

    public function pcos()
    {
        return $this->belongsTo('\App\Models\PCos', 'ostype_id', 'id');
    }

    public function pc_accounts()
    {
        return $this->belongsToMany('\App\Models\pc_account')->withTimestamps();
    }
}
