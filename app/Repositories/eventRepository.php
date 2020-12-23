<?php

namespace App\Repositories;

use App\Models\event;
use App\Repositories\BaseRepository;

/**
 * Class eventRepository
 * @package App\Repositories
 * @version December 19, 2020, 5:12 pm UTC
*/

class eventRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'location',
        'short_desc',
        'long_desc',
        'event_start_datetime',
        'event_end_datetime',
        'tickets_start_datetime',
        'tickets_end_datetime',
        'image',
        'ticket_purchase_price',
        'ticket_selling_price'
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
        return event::class;
    }
}
