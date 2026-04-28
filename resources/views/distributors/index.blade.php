@extends('layout')

@section('content')
<div class="cv-content">
    <table style="font-size:13px; font-family:Arial,sans-serif; width:100%;">
        <thead>
            <tr>
                <th style="text-align:left; padding:4px 8px;">Distributor Name</th>
                <th style="text-align:left; padding:4px 8px;">City</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($distributors as $d)
            <tr>
                <td style="padding:3px 8px;">{{ $d->name }}</td>
                <td style="padding:3px 8px;">{{ $d->city }}</td>
                <td style="padding:3px 8px;">
                    <a href="{{ route('distributors.edit', $d->id) }}" style="color:#5a2d0c;">[Edit]</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <a href="{{ route('distributors.create') }}" style="color:#5a2d0c; font-size:13px;">[Add]</a>
</div>
@endsection