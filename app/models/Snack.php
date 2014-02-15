<?php

class Snack extends Eloquent {
	public function shops(){
		return $this->belongsToMany('Shop','shop_snacks','shop_id','snack_id');
	}

}
