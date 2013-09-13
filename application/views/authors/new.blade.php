@layout('layouts.default')

@section('content')
<div class='container'>
	@if($errors->has())
    <ul>
        {{$errors->first('name', '<li>:message</li>')}}
        {{$errors->first('bio', '<li>:message</li>')}}
    </ul>
    @endif
	{{Form::open('authors/create','POST')}}
		<fieldset>
            <div id="legend" class="">
                <legend class="">Adicionar Autor</legend>
            </div>
            <div class="control-group">
                <!-- Text input-->
                <label class="control-label" for="input01">Nome:</label>
                <div class="controls">
                    <input type="text" name="name" placeholder="Nome" class="input-xlarge" value="{{Input::old('name')}}">
                </div>
                </div><div class="control-group">

                <!-- Textarea input-->
                <label class="control-label" for="input01">Biografia:</label>
                <div class="controls">
                    <textarea name='bio' placeholder="Biografia">{{Input::old('bio')}}</textarea>
                </div>
            </div>
            <div class="controls">
                <input class="btn btn-success" type="submit" name="add_author" value="Add Author"/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p> {{HTML::link_to_route('authors','Retornar')}} </p>
            </div>
        </fieldset>
	{{Form::close()}}
</div>
@endsection