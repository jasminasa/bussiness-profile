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
    <script type="module">
        import {
            DataTable
        } from "{{asset('js/datatables.js')}}"
        const table = new DataTable("table")
    </script>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Action</th>
        </tr>
        </thead>
        @foreach ($why as $why)
        <tbody>
        <tr>
            <td>{{ $why->title }}</td>
            <td>{{ $why->content }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('why.edit',$why->id) }}">Edit</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    
        
@endsection