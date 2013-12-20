<?php

class Trailer extends Eloquent{

	public function locations(){
		$this->belongsToMany('Location');
	}
}