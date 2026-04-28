@extends('layout')

@section('content')
<div class="cv-content">
    <form method="POST" action="{{ route('distributors.update', $distributor->id) }}">
        @csrf
        @method('PUT')
        <table style="font-size:13px; font-family:Arial,sans-serif;">
            <tr>
                <td style="padding:4px 8px;">Distributor Name</td>
                <td><input type="text" name="distributor_name" value="{{ $distributor->name }}" style="width:200px; border:1px solid #999;"></td>
            </tr>
            <tr>
                <td style="padding:4px 8px;">City</td>
                <td><input type="text" name="city" value="{{ $distributor->city }}" style="width:200px; border:1px solid #999;"></td>
            </tr>
            <tr>
                <td style="padding:4px 8px;">State/Region</td>
                <td><input type="text" name="state_region" value="{{ $distributor->region }}" style="width:200px; border:1px solid #999;"></td>
            </tr>
            <tr>
                <td style="padding:4px 8px;">Country</td>
                <td>
                    <select name="country" style="width:204px; border:1px solid #999;">
                        @foreach(['Australia','Germany','The Netherlands','USA','UK','Canada','Indonesia'] as $c)
                            <option {{ $distributor->country == $c ? 'selected' : '' }}>{{ $c }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td style="padding:4px 8px;">Phone</td>
                <td><input type="text" name="phone" value="{{ $distributor->phone }}" style="width:200px; border:1px solid #999;"></td>
            </tr>
            <tr>
                <td style="padding:4px 8px;">Email</td>
                <td><input type="text" name="email" value="{{ $distributor->email }}" style="width:200px; border:1px solid #999;"></td>
            </tr>
            <tr>
                <td></td>
                <td style="padding:4px 8px;">
                    <button type="submit" style="padding:3px 16px; border:1px solid #999; background:#eee; cursor:pointer;">Update</button>
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection