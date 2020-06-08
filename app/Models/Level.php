<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Level
 * @package App\Models
 * @version June 8, 2020, 5:40 pm UTC
 *
 * @property integer $course_id
 * @property string $name
 * @property string $description
 */
class Level extends Model
{

    public $table = 'levels';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'course_id',
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
        'course_id' => 'integer',
        'name' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_id' => 'required',
        'name' => 'required',
        'description' => 'required'
    ];

    
}
