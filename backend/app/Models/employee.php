<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class employee
 * @package App\Models
 * @version December 23, 2021, 1:06 pm JST
 *
 * @property string $name
 * @property integer $DepartmentId
 */
class employee extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'employees';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'DepartmentId'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'DepartmentId' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|max:20',
        'DepartmentId' => 'required'
    ];

    
}
