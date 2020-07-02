<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version June 9, 2020, 9:38 am UTC
 *
 * @property string $name
 * @property string $email
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 */
class User extends Model
{
    use SoftDeletes;
    public $table = 'users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    const MALE = 10;
    const FEMALE = 20;

    public static $GENDER = [
        self::MALE => 'Male',
        self::FEMALE => 'Female'
    ];

    const ACTIVE = 1;
    const INACTIVE = 0;

    public static $USER_STATUS = [
        self::ACTIVE => 'Active',
        self::INACTIVE => 'Inactive'
    ];



    public $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'first_name',
        'last_name',
        'gender',
        'dob',
        'phone',
        'address',
        'nationality',
        'nic',
        'image',
        'status',
        'date_registered',
    ];

    public $with = [
      'roles'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'gender' => 'integer',
        'dob' => 'date',
        'phone' => 'string',
        'address' => 'text',
        'nic' => 'string',
        'image' => 'string',
        'status' => 'integer',
        'date_registered' => 'date',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'first_name' => 'required',
        'last_name' => 'sometimes',
        'gender' => 'required',
        'dob' => 'sometimes',
        'phone' => 'required',
        'nic' => 'sometimes',
        'image' => 'sometimes',
        'status' => 'required',
        'date_registered' => 'sometimes',
    ];

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    // dynamic attribute for showing multiple roles
    public function getRolesCsvAttribute(){
        return implode(",", $this->roles->pluck('name')->all());
    }

}
