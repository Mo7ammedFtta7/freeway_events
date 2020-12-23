<?php

namespace App\Repositories;

use App\Models\invoices;
use App\Repositories\BaseRepository;

/**
 * Class invoicesRepository
 * @package App\Repositories
 * @version December 19, 2020, 11:46 pm UTC
*/

class invoicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'uuid',
        'payload',
        'response',
        'status'
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
        return invoices::class;
    }
}
