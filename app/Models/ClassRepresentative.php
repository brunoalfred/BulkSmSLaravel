<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ClassRepresentative
 * @package App\Models
 * @version December 27, 2020, 12:28 pm UTC
 *
 * @property string $first_name
 * @property string $last_name
 * @property string $registration_number
 * @property integer $year_of_study
 * @property string $programme
 * @property string $gender
 */
class ClassRepresentative extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'class_representatives';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'first_name',
        'last_name',
        'registration_number',
        'year_of_study',
        'programme',
        'gender'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'first_name' => 'string',
        'last_name' => 'string',
        'registration_number' => 'string',
        'year_of_study' => 'integer',
        'programme' => 'string',
        'gender' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required|string|max:25',
        'last_name' => 'required|string|max:25',
        'registration_number' => 'required|string|max:25',
        'year_of_study' => 'required|integer',
        'programme' => 'required|string|max:100',
        'gender' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
