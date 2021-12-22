<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Product
 * @package App\Models
 * @version December 21, 2021, 6:20 pm UTC
 *
 * @property string $description
 * @property integer $categorie_id
 * @property number $price
 * @property string $url_img
 */
class Product extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'description',
        'categorie_id',
        'price',
        'url_img'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
        'categorie_id' => 'integer',
        'price' => 'double',
        'url_img' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'description' => 'required',
        'categorie_id' => 'required',
        'price' => 'required',
        'url_img' => 'required'
    ];

    
}
