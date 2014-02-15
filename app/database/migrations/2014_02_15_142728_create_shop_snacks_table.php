<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopSnacksTable extends Migration {

	private $table_name;

	public function __construct(){
		$this->table_name = 'shop_snacks';
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
			foreach (array('shop_id','snack_id','price') as $field) {
				$table->integer($field)->unsigned();
			}
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
