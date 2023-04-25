@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" x-data="actors">
            @foreach ($actors as $actor)
                <div class="col-md-3">
                    <x-actor-card :actor="$actor" name="test" />

                    {{-- This code is commented because it is replaced by the component --}}
                    {{-- <div class="card" >
                        <img src="{{ $actor['avatar'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $actor['name'] }}</h5>
                            <p class="card-text">
                                {{ $actor['bio'] }}
                            </p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div> --}}
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('actors', () => ({
                init() {
                    console.log('init')

                    const swiper = new Swiper('.swiper', {
                        // Optional parameters

                        loop: true,

                        // If we need pagination
                        pagination: {
                            el: '.swiper-pagination',
                        },

                        // Navigation arrows
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },

                        // And if we need scrollbar
                        scrollbar: {
                            el: '.swiper-scrollbar',
                        },
                    });
                }
            }))
        })
    </script>
@endpush
