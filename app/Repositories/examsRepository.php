<?php

namespace App\Repositories;

use App\Models\exams;
use App\Repositories\BaseRepository;

/**
 * Class examsRepository
 * @package App\Repositories
 * @version December 16, 2020, 12:23 pm UTC
*/

class examsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'category',
        'title',
        'image',
        'short_desc',
        'long_desc',
        'active'
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
        return exams::class;
    }
}
