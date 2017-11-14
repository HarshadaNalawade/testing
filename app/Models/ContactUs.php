<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contact_us';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'contact_us_id';
    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['full_name', 'email_id', 'category', 'message', 'request_call', 'mobile_number'];

    
}
