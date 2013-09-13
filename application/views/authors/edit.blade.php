@layout('layouts.default')

@section('content')
<div class='container'>
	<h1>Editar {{$author->name}}</h1>
	@if($errors->has())
    <ul>
        {{$errors->first('name', '<li>:message</li>')}}
        {{$errors->first('bio', '<li>:message</li>')}}
    </ul>
    @endif
	{{Form::open('authors/update','PUT')}}
		<fieldset>
            <div id="legend" class="">
                <legend class="">Editar Autor</legend>
            </div>
            <div class="control-group">
                <!-- Text input-->
                <label class="control-label" for="input01">Nome:</label>
                <div class="controls">
                    <input type="text" name="name"  class="input-xlarge" value="{{$author->name}}">
                </div>
                </div><div class="control-group">

                <!-- Textarea input-->
                <label class="control-label" for="input01">Biografia:</label>
                <div class="controls">
                    <textarea name='bio'>{{$author->bio}}</textarea>
                </div>
            </div>
            <div class="controls">
            	<input type="hidden" name="hidden_id"  class="input-xlarge" value="{{$author->id}}">
                <input class="btn btn-success" type="submit" name="edit_author" value="Update Author"/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p> {{HTML::link_to_route('authors','Retornar')}} </p>
            </div>
        </fieldset>
	{{Form::close()}}
</div>
@endsection