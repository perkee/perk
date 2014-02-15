<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('SnackTableSeeder');
		$this->call('ShopTableSeeder');
		$this->call('ShopSnackTableSeeder');
	}

}

class SnackTableSeeder extends Seeder {
	public function run()
	{
		DB::table('snacks')->delete();

		$snacks = array(
			array(
				'name' => '20 oz Diet Coke',
				'upc'  => 4904500,
				'type' => 'drink'
				),
			array(
				'name'   => 'Mixed Nuts by Weight'
				),
			array(
				'name'   => 'Raw Peanuts by Weight'
				),
			array(
				'name' => 'Arizona Diet Peach Iced Tea',
				'upc'  => '613008719548',
				'type' => 'drink'
				),
			array(
				'name' => 'Arizona Diet Green Tea with Ginseng',
				'upc'  => '613008720711',
				'type' => 'drink'
				),
			array(
				'name'     => 'Barcel Toreados Habanero Peanuts 3.2oz',
				'upc'      => '757528008970',
				'calories' => 570
				),
			array(
				'name'     => 'Barcel Toreados Extra Spicy Peanuts 3.2oz',
				'upc'      => '757528008963',
				'calories' => 570
				),
			array(
				'name'     => 'Trophy Nuts Hot-N-Spicy Peanuts',
				'upc'      => '74249501376',
				'calories' => 486
				),
			array(
				'name'     => 'Blue Diamond Wasabi Soy Sauce Almonds',
				'upc'      => '41570052303',
				'calories' => 260
				)
			);
		foreach($snacks as $snack){
			Snack::create($snack);
		}
	}
}

class ShopTableSeeder extends Seeder {
	public function run(){
		DB::table('shops')->delete();

		$shops = array(
			array(
				'name'   => '31 Ave Stop Deli',
				'street' => '4301 31st Avenue',
				'zip'    => 11103,
				),
			array(
				'name'   => 'One Stop Convenience & Grocery',
				'street' => '4408 31st Avenue',
				'zip'    => 11103,
				),
			array(
				'name'   => 'Vitality & Health',
				'street' => '4603 Broadway',
				'zip'    => 11103,
				)
			);
		foreach($shops as $shop){
			Shop::create($shop);
		}
	}
}

class ShopSnackTableSeeder extends Seeder{
	public function run(){
		$shop_snacks = array(// php 4.5 syntax, sue me.
			[1,1,150],
			[1,5,100],
			[1,6,125],
			[1,7,125],
			[2,1,125],
			[3,1,125],
			[3,2,699],
			[3,3,299],
			[3,4,100],
			[3,5,100]
			);
		foreach($shop_snacks as $idx => $val){
			$shop_snacks[$idx] = array(
				'shop_id'  => $val[0],
				'snack_id' => $val[1],
				'price'    => $val[2]
				);
		}
		DB::table('shop_snack')->insert($shop_snacks);
	}
}
