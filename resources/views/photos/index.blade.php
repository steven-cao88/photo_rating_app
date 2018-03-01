@extends ('layouts.master')
@section ('main')
<div class="album py-5 bg-light">
  <div class="container">
    <div class="row">
    	@foreach ($photos as $photo)
    		<div class="col-md-4">
    		  <div class="card mb-4 box-shadow">
    		  	<a href="/photos/{{ $photo->id }}">
    		  		<img class="card-img-top" src="{{ $photo->url }}" alt="{{ $photo->title }}">
    		  	</a>
    		    <div class="card-body">
    		      <p class="card-text">{{ ucwords($photo->title) }}</p>
    		      <div class="d-flex justify-content-between align-items-center">
    		        <div class="btn-group">
    		          <a role="button" class="btn btn-sm btn-outline-secondary" href="/photos/{{ $photo->id }}">View</a>
    		          <a  role="button" class="btn btn-sm btn-outline-secondary" href="/photos/{{ $photo->id }}">Rate</a>
    		        </div>
    		        <small class="text-muted">
                        {{ $photo->created_at->diffForHumans() }}      
                    </small>
    		      </div>
    		    </div>
    		  </div>
    		</div>
    	@endforeach
    </div>
  </div>
</div>
@endsection