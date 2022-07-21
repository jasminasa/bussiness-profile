@extends('layouts.master')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Service</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('services.create') }}"> Create</a>
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
            <th>Service Title</th>
            <th width="280px">Description</th>
            <th>Foto</th>
            <th>Action</th>
        </tr>
        @foreach ($services as $service)
        <tr>
            <td>{{ $service->name_service }}</td>
            <td>{{ $service->description }}</td>
            <td>
                <img src="/image/{{ $service->image }}" width="100px">
            </td>
            <td>
                <form action="{{ route('services.destroy',$service->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('services.edit',$service->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $services->links() !!}
        
@endsection