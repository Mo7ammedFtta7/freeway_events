<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
/**
 * Class faqs
 * @package App\Models
 * @version December 16, 2020, 11:11 am UTC
 *
 * @property string $title
 * @property string $answer
 * @property boolean $active
 */
class faqs extends Model
{
    use SoftDeletes;

    use HasFactory;
    use HasUUID;

    public $table = 'Faqs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'answer',
        'active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'uuid' => 'string',
        'title' => 'string',
        'answer' => 'string',
        'active' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string',
        'answer' => 'required|string',
        'active' => 'boolean'
    ];

    
}
