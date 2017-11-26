<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyForm extends Model
{

    public $table = 'ID';
    //protected $primaryKey = 'employeeID';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'ID',
        'Nama',
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