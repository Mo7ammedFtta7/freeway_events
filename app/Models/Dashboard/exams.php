<?php

namespace App\Models\Dashboard;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use BinaryCabin\LaravelUUID\Traits\HasUUID;

/**
 * Class exams
 * @package App\Models\Dashboard
 * @version December 16, 2020, 12:24 pm UTC
 *
 * @property \App\Models\Dashboard\Category $category
 * @property string $category
 * @property string $title
 * @property string $image
 * @property string $short_desc
 * @property string $long_desc
 * @property boolean $active
 */
class exams extends Model
{
    use SoftDeletes;

    use HasFactory,HasUUID;

    public $table = 'Exams';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'uuid';

    public $fillable = [
        'category',
        'title',
        'image',
        'short_desc',
        'long_desc',
        'active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'uuid' => 'string',
        'category' => 'string',
        'title' => 'string',
        'image' => 'string',
        'short_desc' => 'string',
        'long_desc' => 'string',
        'active' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'category' => 'required|string|max:100',
        'title' => 'required|string|max:100',
        'image' => 'required|string|max:100',
        'short_desc' => 'required|string',
        'long_desc' => 'required|string',
        'active' => 'nullable|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function category()
    {
        return $this->belongsTo(\App\Models\Dashboard\Category::class, 'category');
    }
}
