@extends('layout')

@section('content')
<h2>Home</h2>

@foreach($data as $d)
    <div>
        <h3>{{ $d->bean_name }}</h3>
        <p>{{ $d->description }}</p>
        <p>${{ $d->price }}</p>
    </div>
@endforeach

@endsection