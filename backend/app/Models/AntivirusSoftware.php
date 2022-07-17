<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @SWG\Definition(
 *      definition="AntivirusSoftware",
 *      required={"ãname"},
 *      @SWG\Property(
 *          property="ãname",
 *          description="ãname",
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
class AntivirusSoftware extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'antivirus_software';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'ãname'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ãname' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ãname' => 'required'
    ];

    
}
