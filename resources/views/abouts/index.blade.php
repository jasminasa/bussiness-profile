@extends('layouts.master')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>About Us</h2>
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
            <th>About Us Title</th>
            <th width="280px">Description</th>
            <th>Visi</th>
            <th>Misi</th>
            <th>Action</th>
        </tr>
        </thead>
        @foreach ($abouts as $about)
        <tbody>
        <tr>
            <td>{{ $about->title }}</td>
            <td><?= $about->description ?></td>
            <td> {{ $about->visi }}</td>
            <td>{{ $about->misi }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('abouts.edit',$about->id) }}">Edit</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    
    {!! $abouts->links() !!}
        
@endsection