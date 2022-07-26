@extends('layouts.master')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Testimonial</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('testimonials.create') }}"> Create</a>
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
            <th>Name</th>
            <th>Agency</th>
            <th>Testimonial</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        </thead>
        @foreach ($testimonials as $testimonial)
        <tbody>
        <tr>
            <td>{{ $testimonial->name }}</td>
            <td>{{ $testimonial->agency }}</td>
            <td>{{ $testimonial->testimonial }}</td>
            <td>
                <img src="/image/{{ $testimonial->image }}" width="100px">
            </td>
            <td>
                <form action="{{ route('testimonials.destroy',$testimonial->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('testimonials.edit',$testimonial->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    
    {!! $testimonials->links() !!}
        
@endsection