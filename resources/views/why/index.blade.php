@extends('layouts.master')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Why Us</h2>
            </div>
        </div>
    </div>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Action</th>
        </tr>
        @foreach ($why as $why)
        <tr>
            <td>{{ $why->title }}</td>
            <td>{{ $why->content }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('why.edit',$why->id) }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
    
        
@endsection