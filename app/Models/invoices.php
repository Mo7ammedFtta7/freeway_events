<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
use App\Casts\Json;
/**
 * Class invoices
 * @package App\Models
 * @version December 19, 2020, 11:46 pm UTC
 *
 * @property string $uuid
 * @property string $payload
 * @property string $response
 * @property string $status
 */
class invoices extends Model
{

    use HasFactory,HasUUID;

    public $table = 'invoices';
    public $timestamps = false;


    public $fillable = [
        'uuid',
        'event_id',
        'payload',
        'response',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'uuid' => 'string',
        'event_id'=> 'integer',
        'payload' => Json::class,
        'response' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'uuid' => 'required|string|max:100',
        'event_id'=> 'required',
        'payload' => 'required|string',
        'response' => 'required|string',
        'status' => 'required|string',
        'created_at' => 'required'
    ];

    public function getDataAttribute()
    {
        return json_decode( $this->payload);
    }
    public function event()
    {
        return $this->belongsTo(\App\Models\event::class,'event_id', 'id');
    }
}
