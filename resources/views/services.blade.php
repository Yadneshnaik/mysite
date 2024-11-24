@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Our Services</h1>
    <div class="row">
        @foreach($services as $service)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $service->title }}</h5>
                        <p class="card-text">{{ $service->description }}</p>
                        <a href="/contact" class="btn btn-secondary w-100" >Get In Touch</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
