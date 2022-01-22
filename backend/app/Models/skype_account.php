<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @SWG\Definition(
 *      definition="skype_account",
 *      required={"account_name", "password"},
 *      @SWG\Property(
 *          property="account_name",
 *          description="account_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="password",
 *          description="password",
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
class skype_account extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'skype_accounts';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'account_name',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'account_name' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'account_name' => 'required|max:100',
        'password' => 'required|max:100'
    ];

    
}
