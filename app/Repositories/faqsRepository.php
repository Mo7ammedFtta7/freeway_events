<?php

namespace App\Repositories;

use App\Models\faqs;
use App\Repositories\BaseRepository;

/**
 * Class faqsRepository
 * @package App\Repositories
 * @version December 16, 2020, 11:11 am UTC
*/

class faqsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'answer',
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
        return faqs::class;
    }
}
