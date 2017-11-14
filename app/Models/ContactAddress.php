<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactAddress extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contact_address';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'contact_address_id';
    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['address_line1', 'address_line2', 'city', 'state', 'country'];

    
}
