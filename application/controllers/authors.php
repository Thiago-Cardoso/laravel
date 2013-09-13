<?php
class Authors_Controller extends Base_Controller{

	public $restful = true;

	//metodo index
	public function get_index(){
		//coloco numa variavel o id para ordenacao
		$authors =  Author::order_by('id', 'desc')->paginate(3); //mostro 3 resultados na paginacao
		return View::make('authors.index')
			->with('title','Authors Bio')
			->with('authors',$authors);
	}

	//metodo novo de autor
	public function get_new(){
		return View::make('authors.new')
			->with('title','Add New Author');
	}

	//metodo para criacao de autor
	public function post_create(){
		//metodo para valicao
		$validation = Author::validate(Input::all());
		//faco a verificacao
		if($validation->fails()){
			return Redirect::to_route('new_author')->with_errors($validation)->with_input();// redirect
		}
		else{
			//array de dados para gravar
			Author::create(array(
				'name'=>Input::get('name'),
				'bio'=>Input::get('bio')
			));
			return Redirect::to_route('authors') //redirect
				->with('status_message','Author Was Created Successfully'); //mensagem
		}
	}

	//metodo para editar passsando o id como parametro
	public function get_edit($id){
		return View::make('authors.edit')
			->with('title','Edit Author')
			->with('author', Author::find($id)); 
	}

	//metodo para updaate
	public function put_update(){
		$id = Input::get('hidden_id'); //id via get por hidden
		//validacao
		$validation = Author::validate(Input::all());

		//verifico a validacao
		if($validation->fails()){
			return Redirect::to_route('edit_author',$id)->with_errors($validation); //redirect
		}
		else{
			 //array de dados para update
			 Author::update($id, array(
				'name'=>Input::get('name'),
				'bio'=>Input::get('bio')
			));
			return Redirect::to_route('authors')
				->with('message', 'Author Was Updated Successfully'); //mensagem
		}
	}

	//metodo para delete
	public function delete_erase(){
		Author::find(Input::get('id'))->delete(); //pego o id atravez do fid
		return Redirect::to_route('authors') //redirect
			->with('message', 'Author Was Deleted Successfully'); //mensagem
	}
}