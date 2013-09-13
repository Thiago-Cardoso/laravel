<?php
/*Model autor*/
class Author extends Eloquent{
	
	//tabela
	public static $table = 'authors';
	
	//validacoes
	public static $rules = array(
		'name' => 'required|min:5|max:10',
		'bio' => 'required|min:15|max:200'
	);

	//metodo de validacao
	public static function validate($data){
		return Validator::make($data, static::$rules);
	}
}