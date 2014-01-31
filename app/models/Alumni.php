<?php

class Alumni extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	protected $table = 'alumnis';

	public static function validate($data){
		return Validator::make($data,self::$rules);
	}

	public function user()
    {
        return $this->belongsTo('User');
    }

}
