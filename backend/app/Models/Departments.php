<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Departments
 * @package App\Models
 * @version December 24, 2021, 12:51 pm JST
 *
 * @property string $departmentName
 */
class Departments extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'departments';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'departmentName'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'departmentName' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'departmentName' => 'required|max:20'
    ];

    
}
