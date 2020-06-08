<?php

namespace App\Repositories;

use App\Models\Time;
use App\Repositories\BaseRepository;

/**
 * Class TimeRepository
 * @package App\Repositories
 * @version June 8, 2020, 5:42 pm UTC
*/

class TimeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'time'
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
        return Time::class;
    }
}
