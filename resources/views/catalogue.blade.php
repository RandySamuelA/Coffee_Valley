@extends('layout')

@section('content')
<h2>Catalogue</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Bean</th>
        <th>Description</th>
        <th>Price</th>
    </tr>

    @foreach($beans as $b)
    <tr>
        <td>{{ $b->bean_name }}</td>
        <td>{{ $b->description }}</td>
        <td>${{ $b->price }}</td>
    </tr>
    @endforeach

</table>

@endsection