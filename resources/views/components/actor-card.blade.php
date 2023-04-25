<div class="card">

    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <img src="{{ $actor['avatar'] }}" class="card-img-top">
            </div>
            @if (isset($actor['gallery']))
                @foreach ($actor['gallery'] as $image)
                    <div class="swiper-slide">
                        <img src="{{ $image }}" class="card-img-top">
                    </div>
                @endforeach
            @endif

        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>



    <div class="card-body">
        <h5 class="card-title">{{ $actor['name'] }}</h5>
        <p class="card-text">
            {{ Str::limit($actor['bio'], 100, '...') }}
        </p>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#{{ str_replace(' ', '', $actor['name']) }}">
            Read More
        </button>

    </div>
</div>

<div class="modal fade" id="{{ str_replace(' ', '', $actor['name']) }}" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $actor['name'] }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="{{ $actor['avatar'] }}" class="card-img-top">
                {{ $actor['bio'] }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
