<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class department
 * @package App\Models
 * @version January 6, 2022, 1:09 pm JST
 *
 * @property string $name
 */
class department extends \Illuminate\Database\Eloquent\Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'departments';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|max:20'
    ];

    public static function selectlist()
    {
        $departments = department::all();
        $list = [];
        $list += ["" => "選択してください"];
        foreach ($departments as $department) {
        $list += [$department->id => $department->name];
        }
        return $list;
    }
}
