@extends('layout')

@section('content')
<div class="cv-content">
    <form method="POST" action="{{ route('distributors.store') }}">
        @csrf
        <table style="font-size:13px; font-family:Arial,sans-serif;">
            <tr>
                <td style="padding:4px 8px;">Distributor Name</td>
                <td><input type="text" name="distributor_name" style="width:200px; border:1px solid #999;"></td>
            </tr>
            <tr>
                <td style="padding:4px 8px;">City</td>
                <td><input type="text" name="city" style="width:200px; border:1px solid #999;"></td>
            </tr>
            <tr>
                <td style="padding:4px 8px;">State/Region</td>
                <td><input type="text" name="state_region" style="width:200px; border:1px solid #999;"></td>
            </tr>
            <tr>
                <td style="padding:4px 8px;">Country</td>
                <td>
                    <select name="country" style="width:204px; border:1px solid #999;">
                        <option>Australia</option>
                        <option>Germany</option>
                        <option>The Netherlands</option>
                        <option>USA</option>
                        <option>UK</option>
                        <option>Canada</option>
                        <option>Indonesia</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="padding:4px 8px;">Phone</td>
                <td><input type="text" name="phone" style="width:200px; border:1px solid #999;"></td>
            </tr>
            <tr>
                <td style="padding:4px 8px;">Email</td>
                <td><input type="text" name="email" style="width:200px; border:1px solid #999;"></td>
            </tr>
            <tr>
                <td></td>
                <td style="padding:4px 8px;">
                    <button type="submit" style="padding:3px 16px; border:1px solid #999; background:#eee; cursor:pointer;">Add</button>
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection