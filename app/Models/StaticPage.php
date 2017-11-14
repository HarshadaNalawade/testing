<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaticPage extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'static_pages';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'page_id';
    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['page_title', 'page_content'];

    
}
