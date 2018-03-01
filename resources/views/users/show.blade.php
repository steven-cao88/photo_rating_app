@extends ('layouts.master')
@section ('main')
<div class="album py-5 bg-light">
  <div class="container">
    @if (count($ratedPhotos))
    <h2>Photos that you rated</h2>
    <div class="row">
      @foreach ($ratedPhotos as $photo)
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <a href="/photos/{{ $photo->id }}">
              <img class="card-img-top" src="{{ $photo->url }}" alt="{{ $photo->title }}">
            </a>
            <div class="card-body">
              <p class="card-text text-center">{{ ucwords($photo->title) }}</p>
              <div class="card-text text-center">
                @if ($photo->rate == 1)
                  <i class="fas fa-thumbs-up"></i>
                @else
                  <i class="fas fa-thumbs-down"></i>
                @endif
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    @else
    <div class="row">
      <div class="col text-center">
        You have not rated any photo yet, why not start <a href="/photos">here</a>?
      </div>
    </div>
    @endif
  </div>
</div>
@endsection