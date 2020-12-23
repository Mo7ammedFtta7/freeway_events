<?php

namespace App\Repositories;

use App\Models\tickets;
use App\Repositories\BaseRepository;

/**
 * Class ticketsRepository
 * @package App\Repositories
 * @version December 21, 2020, 7:05 am UTC
*/

class ticketsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'uuid',
        'event_id',
        'fullname',
        'email',
        'phone',
        'Identity_type',
        'Identity_number',
        'invoice_uuid'
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
        return tickets::class;
    }
}
