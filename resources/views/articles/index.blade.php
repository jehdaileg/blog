@extends('layout.base')

@section('content')

<div class="container">

 @if($message = Session::get('success'))

 <div class="alert alert-success">

   <p>{{$message}}</p>

 </div>

 @endif

</div>


<div class="row">
	<div class="col-md-12"><a href="{{ route('articles.create')}}" class="btn btn-success btn-sm"> Créer un article</a></div> <br><br>
	

  @foreach($articles as $article)

  <div class="col-md-4">
    <div class="card mb-4 shadow-sm">
     <div class="card-title">
      <h1>{{ $article->title}}</h1>
    </div>

    <div class="card-body">
     

  <div class="d-inline-flex p-2 bd-highlight">

      <h6>LIKES: {{$article->nbre_like}}</h6> &nbsp;
      <h6>UNLIKES: {{$article->nbre_unlike}}</h6> &nbsp;

      <h6>Différence: {{ abs(($article->nbre_like) - ($article->nbre_unlike))  }}</h6> &nbsp;

       </div>


      <p class="card-text">{{ $article->description }}</p>
      <p>  <small class="text-muted">Publié à {{ $article->created_at}}</small></p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">

          <a href="{{ route('articles.show', $article) }}" class="btn btn-info">View</a> &nbsp;

          <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-secondary">Edit</a> &nbsp;


          <a href="{{ route('add_like',$article->id) }}" class="btn btn-outline-warning">Like</a> &nbsp;

            <a href="{{ route('unlike',$article->id) }}" class="btn btn-secondary">Unlike</a> &nbsp;



          {{--faire la suppression d'un article, le bouton doit être dans un form avec le bouton qui déclenche la suppression--}}

          <form action="{{route('articles.destroy', $article->id) }}" method="post">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger"  onclick="return confirm('Do you want to delete this article ?');">Delete</button>
          </form>
          
        </div> &nbsp; &nbsp;

      </div>
    </div>
  </div>
</div>


@endforeach

{{ $articles->links()}}

</div>


@endsection