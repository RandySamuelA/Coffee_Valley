@extends('layout')

@section('content')
<div class="cv-content">
    <form method="POST" action="{{ route('upload.store') }}" enctype="multipart/form-data">
        @csrf
        <table style="font-size:13px; font-family:Arial,sans-serif;">
            <tr>
                <td style="padding:4px 8px;">Title</td>
                <td><input type="text" name="title" style="width:200px; border:1px solid #999;"></td>
            </tr>
            <tr>
                <td style="padding:4px 8px;">Document File</td>
                <td><input type="file" name="document_file"></td>
            </tr>
            <tr>
                <td style="padding:4px 8px;">Author</td>
                <td><input type="text" name="author" style="width:200px; border:1px solid #999;"></td>
            </tr>
            <tr>
                <td></td>
                <td style="padding:4px 8px;">
                    <button type="submit" style="padding:3px 16px; border:1px solid #999; background:#eee; cursor:pointer;">Add Document</button>
                </td>
            </tr>
        </table>
    </form>

    <br>
    @if($uploads->isEmpty())
        <p style="font-size:13px; font-family:Arial,sans-serif;">There are currently no reports in the library.</p>
    @else
        <table style="font-size:13px; font-family:Arial,sans-serif; width:100%; margin-top:12px;">
            <thead>
                <tr>
                    <th style="text-align:left; padding:4px 8px;">Title</th>
                    <th style="text-align:left; padding:4px 8px;">Author</th>
                    <th style="text-align:left; padding:4px 8px;">File</th>
                </tr>
            </thead>
            <tbody>
                @foreach($uploads as $upload)
                <tr>
                    <td style="padding:3px 8px;">{{ $upload->title }}</td>
                    <td style="padding:3px 8px;">{{ $upload->author }}</td>
                    <td style="padding:3px 8px;">
                        <a href="{{ asset('uploads/' . $upload->file) }}" style="color:#5a2d0c;">Download</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection