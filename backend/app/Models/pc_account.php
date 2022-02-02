<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @SWG\Definition(
 *      definition="pc_account",
 *      required={"employee_id", "password", "settingdate", "account_name"},
 *      @SWG\Property(
 *          property="employee_id",
 *          description="employee_id",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="password",
 *          description="password",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="settingdate",
 *          description="settingdate",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="account_name",
 *          description="account_name",
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
class pc_account extends \Illuminate\Database\Eloquent\Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'pc_accounts';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'employee_id',
        'password',
        'settingdate',
        'account_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'employee_id' => 'int',
        'password' => 'string',
        'settingdate' => 'date',
        'account_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'employee_id' => 'required',
        'password' => 'required|max:30',
        'settingdate' => 'required',
        'account_name' => 'required|max:20'
    ];

    public function employee()
    {
        return $this->belongsTo('\App\Models\employee', 'employee_id', 'id');
    }
    public function Web_accounts()
    {
        return $this->belongsToMany('\App\Models\Web_account','web_account_pc_account')->withTimestamps();
    }
}
