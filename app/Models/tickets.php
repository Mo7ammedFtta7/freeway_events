<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use BinaryCabin\LaravelUUID\Traits\HasUUID;

/**
 * Class tickets
 * @package App\Models
 * @version December 21, 2020, 7:05 am UTC
 *
 * @property string $uuid
 * @property string $event_id
 * @property string $fullname
 * @property string $email
 * @property string $phone
 * @property string $Identity_type
 * @property string $Identity_number
 * @property string $invoice_uuid
 */
class tickets extends Model
{
    use SoftDeletes;

    use HasFactory,HasUUID;

    public $table = 'tickets';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'uuid' => 'string',
        'event_id' => 'string',
        'fullname' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'Identity_type' => 'string',
        'Identity_number' => 'string',
        'invoice_uuid' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'uuid' => 'required|string|max:100',
        'event_id' => 'required|string|max:100',
        'fullname' => 'required|string|max:100',
        'email' => 'required|string|max:100',
        'phone' => 'required|string|max:10',
        'Identity_type' => 'nullable|string|max:100',
        'Identity_number' => 'nullable|string|max:100',
        'invoice_uuid' => 'required|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required',
        'deleted_at' => 'required'
    ];

    
}
