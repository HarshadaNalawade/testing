<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'faq';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'faq_id';
    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['question', 'answer'];

    
}
