<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $primaryKey = 'stock_id';
    public $fillable = ['products_id','stock_increase','stock_decrease','stage'];

}
