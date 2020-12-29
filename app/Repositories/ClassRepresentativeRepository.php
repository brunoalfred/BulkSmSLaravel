<?php

namespace App\Repositories;

use App\Models\ClassRepresentative;
use App\Repositories\BaseRepository;

/**
 * Class ClassRepresentativeRepository
 * @package App\Repositories
 * @version December 27, 2020, 12:28 pm UTC
*/

class ClassRepresentativeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'first_name',
        'last_name',
        'registration_number',
        'year_of_study',
        'programme',
        'gender'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ClassRepresentative::class;
    }
}
