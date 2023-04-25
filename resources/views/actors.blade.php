@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($actors as $actor)
                <div class="col">

                    <div class="card" style="width: 18rem;">
                        <img src="{{ $actor['avatar'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $actor['name'] }}</h5>
                            <p class="card-text">
                                {{ $actor['bio'] }}
                            </p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection