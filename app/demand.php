<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Demand extends Model {
	public function product()
    {
        return $this->has('App\Product');
    }
    protected $primaryKey = 'demand_id';
    public $fillable = [
    	'product_id',
    	'demand_id',
    	'demand_quantity',
    	'demand_price',
    	'client_name',
    	'demand_note'
    ];
}
