@extends('layout.base')


@section('content')

<div class="row">
	<div class="col-md-12">

		@if($errors->any())

		<div class="alert alert-danger">
			<strong>Warning!!! Un erreur est survenue!!!</strong>

			<ul>
				@foreach($errors->all() as $error)

				<li>{{$error}}</li>
				
				@endforeach
			</ul>
			
		</div>

		@endif

		<form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
			@csrf

			@method('post')
			<div class="form-group">
				<label for="title">Titre</label>

				<input type="text" name="title" placeholder="Title" class="form-control">
			</div>

			<div class="form-group">
				<label for="description">Titre</label>

				<textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
			</div>


			<div class="form-group">
				
			</div>

			<button type="submit" class="btn btn-outline-info"> 👍✔Publié</button>
		</form>
		
	</div>
</div>

@stop