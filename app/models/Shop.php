<?php

class Shop extends Eloquent {
	public function snacks(){
		return $this->belongsToMany('Snack')->withPivot('price')->withTimestamps();
	}
}
