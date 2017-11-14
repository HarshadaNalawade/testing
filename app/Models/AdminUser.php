<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'admin_users';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'admin_id';
    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'username', 'password', 'first_name', 'last_name', 'email_id', 'phone_number', 'passport_number', 'address', 'state', 'city', 'country', 'role'];

    public function role()
	{
		return $this->belongsTo('App\Models\Roles');
	}
	
}
