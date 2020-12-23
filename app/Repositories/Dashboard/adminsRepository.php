<?php

namespace App\Repositories\Dashboard;

use App\Models\Dashboard\admins;
use App\Repositories\BaseRepository;

/**
 * Class adminsRepository
 * @package App\Repositories\Dashboard
 * @version December 16, 2020, 1:43 pm UTC
*/

class adminsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
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
        return admins::class;
    }
}
