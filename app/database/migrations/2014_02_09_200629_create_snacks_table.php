<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSnacksTable extends Migration {

	public function __construct(){
		$this->table_name = 'snacks';
	}
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->table_name,function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('type')->default('food');//or 'drink'
			$table->integer('upc')->unsigned()->default(0)->unique();
			$table->integer('calories')->unsigned()->default(0);
			$table->index('upc');
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
		Schema::dropIfExists($this->table_name);
	}
}
