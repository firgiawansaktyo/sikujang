<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    public $fillable = ['product_id','product_name','product_desc'];

}
