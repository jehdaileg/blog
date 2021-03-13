@extends('layout.base')

@section('content')

<div class="container">
	
	<div class="row">
		<div class="col-md-8 offset-md-2">

			<div class="card border-1">
				<div class="card-title text-center">{{ $article->title }}</div>

				<div class="card card-body">
					{{ $article->description }}


					<div>
						<h4>les commentaires</h4>

						<ul>
							{{-- afficher tous les commentaires de l'article  --}}

						@foreach($article->commentaires as $commantaire)
						 <li class="list-group list-inline list-group-item">
						 	{{  $commantaire->content}}
						 	
						 </li>

						@endforeach

						</ul>
					</div>
				</div>
               
               {{--Ajout de la partie pour commenter l'article ciblé --}}

				<div>
					<form action="{{ route('commantaires.store') }}" method="post">
						@csrf
						@method('post')
						<input type="hidden" name="article_id" value="{{ $article->id }}">
						<textarea class="form-control" name="content">{{ old('content')}}
						</textarea>
						{{-- {{ ?? ''}} --}}
						{{-- @dump($errors ) --}}


						{{--Poster le commentaire de l'article --}}

						<button class="btn btn-sm btn-warning">Poster</button>
					</form>
				</div>
			</div>
			
		</div>
	</div>
</div>


@endsection