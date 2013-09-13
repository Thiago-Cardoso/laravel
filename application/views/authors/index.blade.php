@layout('layouts.default')

@section('content')
<div class='container' align='center'>
	<h1>Autor Biografia</h1>
	<p> {{HTML::link_to_route('new_author', 'Adicionar novo autor')}} </p> 
	<table width="500" border='1' class='table-striped'>
		<tr>
			<th scope='row'>Nome</th>
			<th scope='row'>Biografia</th>
			<th scope='row'>Update</th>
			<th scope='row'>Ação</th>
		</tr>
		
		@foreach($authors->results as $author)
		<tr>
			<td> {{$author->name}} </td>
			<td> {{$author->bio}} </td>
			<td><small> {{$author->updated_at}} </small></td>
			<td>
				<button class='btn btn-success'>{{HTML::link_to_route('edit_author','Edit',array($author->id))}}</button>
				{{Form::open('author/delete','Delete')}}
					{{Form::hidden('id', $author->id)}}
					<input class="btn btn-success" type="submit" name="edit_author" value="Delete"/>
				{{Form::close()}}
			</td>
		<tr>
		@endforeach
		
	</table><br>
	<table>
		<tr>
			{{$authors->links()}}
		</tr>
	</table>
</div>
@endsection