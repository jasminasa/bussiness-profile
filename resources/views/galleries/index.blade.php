@extends('layouts.master')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Gallery</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('galleries.create') }}"> Create</a>
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
            <th>Gallery Title</th>
            <th width="280px">Description</th>
            <th>Foto</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
        @foreach ($galleries as $gallery)
        <tr>
            <td>{{ $gallery->title }}</td>
            <td>{{ $gallery->description }}</td>
            <td>
                <img src="/image/{{ $gallery->image }}" width="100px">
            </td>
            <td>{{ $gallery->category }}</td>
            <td>
                <form action="{{ route('galleries.destroy',$gallery->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('galleries.edit',$gallery->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $galleries->links() !!}
        
@endsection