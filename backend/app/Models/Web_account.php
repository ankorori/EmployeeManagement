<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @SWG\Definition(
 *      definition="Web_account",
 *      required={"name", "password", "note", "account_category_id"},
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
 *          property="note",
 *          description="note",
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
class Web_account extends \Illuminate\Database\Eloquent\Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'web_accounts';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'password',
        'note',
        'Web_account_category_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'password' => 'string',
        'note' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|max:100',
        'password' => 'required|max:100',
        //'note' => 'required',
        'Web_account_category_id' => 'required'
    ];

    public function Web_account_category()
    {
        return $this->belongsTo('App\Models\Web_account_category','Web_account_category_id','id');
    }
}
