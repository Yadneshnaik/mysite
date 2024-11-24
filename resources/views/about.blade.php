@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">About Us</h1>
    <p>{{ $about->content }}</p>
</div>
@endsection
