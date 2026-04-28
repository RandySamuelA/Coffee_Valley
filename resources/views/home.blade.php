@extends('layout')

@section('content')
<div class="cv-content">
    <div class="cv-label">Bean of the Day</div>
    <div class="cv-value">{{ $dailyBean->bean_name }}</div>

    <div class="cv-label">Sale Price</div>
    <div class="cv-value">${{ number_format($dailyBean->sale_price, 2) }}</div>

    <div class="cv-label">Description</div>
    <div class="cv-value">{{ $dailyBean->description }}</div>
</div>
@endsection