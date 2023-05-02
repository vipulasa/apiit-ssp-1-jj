@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="">
                        <input type="text" name="name" placeholder="Name">
                        <input type="text" name="description" placeholder="Description">
                        <input type="text" name="price" placeholder="Price">
                        <input type="submit" value="Create" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
