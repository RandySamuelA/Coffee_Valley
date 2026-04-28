@extends('layout')

@section('content')
<div class="cv-content">
    <table border="1" cellpadding="8" cellspacing="0" style="width:100%; border-collapse:collapse; font-size:13px; font-family:Arial,sans-serif;">
        <thead>
            <tr style="background:#f0e6d3;">
                <th style="width:120px;">Bean</th>
                <th>Description</th>
                <th style="width:90px;">Price/Unit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($beans as $bean)
            <tr>
                <td style="vertical-align:top;">{{ $bean->bean_name }}</td>
                <td style="vertical-align:top;">{{ $bean->description }}</td>
                <td style="vertical-align:top; text-align:right;">${{ number_format($bean->price, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection