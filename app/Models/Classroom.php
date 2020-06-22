<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Classroom
 * @package App\Models
 * @version June 8, 2020, 5:37 pm UTC
 *
 * @property string $name
 * @property string $code
 * @property string $description
 * @property boolean $status
 */
class Classroom extends Model
{
    use SoftDeletes;
    public $table = 'classrooms';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    const STATUS_RESERVED = 0;
    const STATUS_AVAILABLE = 1;

    public static $ClassroomStatus = [
        self::STATUS_RESERVED => "Reserved",
        self::STATUS_AVAILABLE => "Available"
    ];

    public static $ClassroomStatusCssColor = [
        self::STATUS_AVAILABLE => "success",
        self::STATUS_RESERVED => "danger"
    ];


    public $fillable = [
        'name',
        'code',
        'description',
        'status'
    ];

    protected $appends = [
        'classroom_status_css'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'code' => 'string',
        'description' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'code' => 'required',
        'description' => 'required',
        'status' => 'required'
    ];

    public function getClassroomStatusCssAttribute() {
        return '<span class="label label-' . self::$ClassroomStatusCssColor[$this->status] . '">' . ucwords(str_replace('_', ' ',
                self::$ClassroomStatus[$this->status])) . '</span>';
    }


}
