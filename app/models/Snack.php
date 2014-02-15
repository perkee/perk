<?php

class Snack extends Eloquent {
	public function shops(){
		return $this->belongsToMany('Shop')->withPivot('price')->withTimestamps();
	}
}
