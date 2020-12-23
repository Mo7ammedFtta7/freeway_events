<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class event
 * @package App\Models
 * @version December 19, 2020, 5:12 pm UTC
 *
 * @property string $name
 * @property string $location
 * @property string $short_desc
 * @property string $long_desc
 * @property string|\Carbon\Carbon $event_start_datetime
 * @property string|\Carbon\Carbon $event_end_datetime
 * @property string|\Carbon\Carbon $tickets_start_datetime
 * @property string|\Carbon\Carbon $tickets_end_datetime
 * @property string $image
 * @property integer $ticket_purchase_price
 * @property integer $ticket_selling_price
 */
class event extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'events';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'location' => 'string',
        'short_desc' => 'string',
        'long_desc' => 'string',
        'event_start_datetime' => 'datetime',
        'event_end_datetime' => 'datetime',
        'tickets_start_datetime' => 'datetime',
        'tickets_end_datetime' => 'datetime',
        'image' => 'string',
        'ticket_purchase_price' => 'integer',
        'ticket_selling_price' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:100',
        'location' => 'required|string|max:100',
        'short_desc' => 'required|string',
        'long_desc' => 'required|string',
        'event_start_datetime' => 'required',
        'event_end_datetime' => 'required',
        'tickets_start_datetime' => 'required',
        'tickets_end_datetime' => 'required',
        'image' => 'required|string|max:100',
        'ticket_purchase_price' => 'required|integer',
        'ticket_selling_price' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
