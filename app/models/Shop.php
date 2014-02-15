<?php

class Shop extends Eloquent {
	public function snacks(){
		return $this->belongsToMany('Snack','shop_snacks','snack_id','shop_id');
	}
}
