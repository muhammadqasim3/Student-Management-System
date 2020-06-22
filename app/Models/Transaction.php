<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Transaction
 * @package App\Models
 * @version June 8, 2020, 5:44 pm UTC
 *
 * @property integer $student_id
 * @property integer $fee_id
 * @property integer $user_id
 * @property integer $paid
 * @property string $date
 * @property string $remarks
 * @property string $description
 */
class Transaction extends Model
{
    use SoftDeletes;
    public $table = 'transactions';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'student_id',
        'fee_id',
        'user_id',
        'paid',
        'date',
        'remarks',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'student_id' => 'integer',
        'fee_id' => 'integer',
        'user_id' => 'integer',
        'paid' => 'integer',
        'date' => 'date',
        'remarks' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student_id' => 'required',
        'fee_id' => 'required',
        'user_id' => 'required',
        'paid' => 'required',
        'date' => 'required',
        'remarks' => 'required',
        'description' => 'required'
    ];


}
