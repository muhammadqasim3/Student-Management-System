<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Semester
 * @package App\Models
 * @version June 29, 2020, 7:05 am UTC
 *
 * @property string $name
 * @property string $code
 * @property string $duration
 * @property string $description
 */
class Semester extends Model
{

    public $table = 'semesters';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'code',
        'duration',
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
        'code' => 'string',
        'duration' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'code' => 'required',
        'duration' => 'required',
        'description' => 'required'
    ];

    
}
