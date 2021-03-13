@extends('layout.base')


@section('content')

    <div class="row">

    	<div class="col-md-12">

    		@if($errors->any())

    		<div class="alert alert-danger">
    			<strong>Attention!!! Une ou plusieurs erruers rencontrées!</strong>

    			<ul>
    				@foreach($errors->all() as $error)

    				<li>{{$error}}</li>

    			    @endforeach
    				
    			</ul>
    			


    		</div>


    		@endif

    		<form action="{{ route('articles.update', $article->id) }}" method="post" class="form">
    			@csrf

    			@method('PUT')

    			<div class="col-md-12 col-xs-12 col-sm-12">

    				<div class="form-group">
    					<label><strong>Title</strong></label>
    					<input type="text" name="title" value="{{$article->title}}" class="form-control">
    				</div>
    			</div>

    			<div class="col-md-12 col-sm-12 col-xs-12">


    				<div class="form-group">
    					<label><strong>Description</strong></label>
    					<textarea name="description"  cols="30" rows="10" class="form-control">{{$article->description}}</textarea>
    				</div>
    			</div>

    			<div class="col-md-12 col-sm-12 col-xs-12">
    				<button type="submit" class="btn btn-primary">Save</button>
    			</div>
    				
    			</div>
    			
    		</form>
    		
    	</div>


    </div>




@endsection