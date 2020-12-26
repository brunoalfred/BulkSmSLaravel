<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class ClassRepresentative
 * @package App\Models
 * @version December 21, 2020, 9:26 pm UTC
 *
 * @property string $first_name
 * @property string $last_name
 * @property integer $year_of_study
 * @property string $programme
 * @property string $gender
 */
class ClassRepresentative extends Model
{
    use HasFactory;


    public $table = 'class_representatives';


    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'registration_number';



    public $fillable = [
        'first_name',
        'last_name',
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
        'registration_number' => 'integer',
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
        'year_of_study' => 'required|integer',
        'programme' => 'required|string|max:30',
        'gender' => 'required|string'
    ];
}
