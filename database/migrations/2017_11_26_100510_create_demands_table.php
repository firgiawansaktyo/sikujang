<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('demands', function (Blueprint $table) {
            $table->unsignedInteger('product_id');
            $table->increments('demand_id');
            $table->unsignedInteger('demand_quantity');
            $table->unsignedInteger('harga_satuan');
            $table->unsignedInteger('harga_total');
            $table->string('client_name');
            $table->text('demand_note');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
