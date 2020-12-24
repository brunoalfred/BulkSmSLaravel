<?php

namespace App\Repositories;

use App\Models\ClassRepresentative;
use App\Repositories\BaseRepository;

/**
 * Class ClassRepresentativeRepository
 * @package App\Repositories
 * @version December 21, 2020, 9:26 pm UTC
*/

class ClassRepresentativeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'first_name',
        'last_name',
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
