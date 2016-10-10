<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model {
	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pro_name_kh','pro_name_en','icon_marker','lng','lat'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = "provinces";
}
