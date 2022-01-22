<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @SWG\Definition(
 *      definition="pc_account",
 *      required={"name", "password", "settingdate", "account_name"},
 *      @SWG\Property(
 *          property="name",
 *          description="name",
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
class pc_account extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'pc_accounts';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
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
        'name' => 'string',
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
        'name' => 'required|max:20',
        'password' => 'required|max:30',
        'settingdate' => 'required',
        'account_name' => 'required|max:20'
    ];

    public function employee()
    {
        return $this->belongsTo('\app\models\employee', 'employee_id', 'id');
    }
}
