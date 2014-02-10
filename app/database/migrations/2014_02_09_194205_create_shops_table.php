<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration {

	private $table_name;
	private $values;

	public function __construct(){
		$this->table_name = 'shops';
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
			$table->string('name',100);
			$table->string('street',100);
			$table->integer('zip')->unsigned();
			$table->float('lat')->nullable();
			$table->float('lng')->nullable();
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
