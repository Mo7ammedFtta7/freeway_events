<?php

namespace App\Repositories\Website;

use App\Models\Website\major;
use App\Repositories\BaseRepository;

/**
 * Class majorRepository
 * @package App\Repositories\Website
 * @version December 17, 2020, 9:45 am UTC
*/

class majorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return major::class;
    }
}
