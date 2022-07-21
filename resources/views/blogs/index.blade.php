@extends('layouts.master')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Blog</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('blogs.create') }}"> Create</a>
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
            <th>Blog Title</th>
            <th width="280px">Description</th>
            <th>Foto</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
        @foreach ($blogs as $blog)
        <tr>
            <td>{{ $blog->blog_title }}</td>
            <td>{{ $blog->description }}</td>
            <td>
                <img src="/image/{{ $blog->image }}" width="100px">
            </td>
            <td>{{ $blog->category }}</td>
            <td>
                <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('blogs.edit',$blog->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $blogs->links() !!}
        
@endsection