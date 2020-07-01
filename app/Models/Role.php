<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Role
 * @package App\Models
 * @version June 9, 2020, 9:37 am UTC
 *
 * @property string $name
 */
class Role extends Model
{
    use SoftDeletes;
    public $table = 'roles';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    const SUPERADMIN = 10;
    const PRINCIPLE = 20;
    const TEACHER = 30;
    const STAFF = 40;
    const STUDENT = 50;

    public static $ROLES = [
        self::SUPERADMIN => 'Super Admin',
        self::PRINCIPLE => 'Principle',
        self::TEACHER => 'Teacher',
        self::STAFF => 'Staff',
        self::STUDENT => 'Student'
    ];


    public $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'text'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'description' => 'sometimes'
    ];

    public function user(){
        return $this->belongsToMany(User::class);
    }

}
