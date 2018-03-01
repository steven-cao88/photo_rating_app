@extends ('layouts.master')
@section ('main')
    <div class="container">
        <div class="row">
            <div class="col mt-1">
                @include('layouts.errors')
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card w-75 mx-auto">
                  <img class="card-img-top" src="{{ $photo->url }}" alt="{{ $photo->title }}">
                  <div class="card-body">
                    <p class="card-text text-center">
                        {{ ucwords($photo->title) }}
                    </p>
                    <div class="text-center">
                        <form method="POST" action="/rates/{{ $photo->id }}/like">
                            {{ csrf_field() }}
                            <button type="submit">
                                <i class="far fa-thumbs-up"></i> 
                            </button>
                            {{ count($photo->rates->where('rate', 1)->all()) }}
                        </form>
                        <br>
                        <form method="POST" action="/rates/{{ $photo->id }}/dislike">
                            {{ csrf_field() }}
                            <button type="submit">
                                <i class="far fa-thumbs-down"></i> 
                            </button>
                            {{ count($photo->rates->where('rate', -1)->all()) }}
                        </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection