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
	}

}

class SnackTableSeeder extends Seeder {
	public function run()
	{
		DB::table('snacks')->delete();

		$snacks = array(
			array(
				'name'   => '20 oz Diet Coke',
				'upc'    => '4904500',
				'type'   => 'drink'
				),
			array(
				'name'   => 'Mixed Nuts by Weight'
				),
			array(
				'name'   => 'Arizona Diet Peach Iced Tea',
				'upc'    => '613008719548',
				'type'   => 'drink'
				),
			);
		foreach($snacks as $snack){
			Snack::create($snack);
		}
	}
}

class ShopTableSeeder extends Seeder {
	public function run()
	{
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
