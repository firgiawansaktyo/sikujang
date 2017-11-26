<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyForm extends Model
{

    protected $table = 'employee';
    //protected $primaryKey = 'employeeID';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employeeID',
        'employeeNo',
        'Cname',
        'dob',
        'phoneNumber',
        'address',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}