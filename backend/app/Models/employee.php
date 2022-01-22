<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @SWG\Definition(
 *      definition="employee",
 *      required={"name", "department_id"},
 *      @SWG\Property(
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="department_id",
 *          description="department_id",
 *          type="integer",
 *          format="int32"
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
class employee extends \Illuminate\Database\Eloquent\Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'employees';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'department_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'department_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|max:20',
        'department_id' => 'required|numeric'
    ];
    public static function selectlist()
    {
        $employees = employee::all();
        $list = [];
        $list += ["" => "選択してください"];
        foreach ($employees as $employee) {
        $list += [$employee->id => $employee->name];
        }
        return $list;
    }
    public function department()
    {
        return $this->belongsTo('\app\Models\department', 'department_id', 'id');
    }
    public function pc_accounts(){
        return $this->hasMany('\app\Models\pc_account');
    }
}
