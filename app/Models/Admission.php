<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Admission
 * @package App\Models
 * @version June 9, 2020, 1:13 pm UTC
 *
 * @property integer $user_id
 * @property integer $class_id
 * @property string $roll_no
 * @property string $first_name
 * @property string $last_name
 * @property string $father_name
 * @property string $father_phone
 * @property string $mother_name
 * @property string $gender
 * @property string $email
 * @property string $dob
 * @property string $phone
 * @property string $permanent_address
 * @property string $current_address
 * @property string $nationality
 * @property string $nic
 * @property boolean $status
 * @property string $date_registered
 * @property string $image
 */
class Admission extends Model
{
    use SoftDeletes;
    public $table = 'admissions';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'user_id',
        'class_id',
        'roll_no',
        'first_name',
        'last_name',
        'father_name',
        'father_phone',
        'mother_name',
        'gender',
        'email',
        'dob',
        'phone',
        'permanent_address',
        'current_address',
        'nationality',
        'nic',
        'status',
        'date_registered',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'class_id' => 'integer',
        'roll_no' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'father_name' => 'string',
        'father_phone' => 'string',
        'mother_name' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'dob' => 'date',
        'phone' => 'string',
        'permanent_address' => 'string',
        'current_address' => 'string',
        'nationality' => 'string',
        'nic' => 'string',
        'status' => 'boolean',
        'date_registered' => 'date',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'class_id' => 'required',
        'roll_no' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'father_name' => 'required',
        'father_phone' => 'required',
        'mother_name' => 'required',
        'gender' => 'required',
        'email' => 'required',
        'dob' => 'required',
        'phone' => 'required',
        'permanent_address' => 'required',
        'current_address' => 'required',
        'nationality' => 'required',
        'nic' => 'required',
        'status' => 'required',
        'date_registered' => 'required'
    ];


}
