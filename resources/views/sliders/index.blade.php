@extends('layouts.master')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Slider</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('sliders.create') }}"> Create</a>
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
            <th>Slider Content</th>
            <th>Foto</th>
            <th>Action</th>
        </tr>
        @foreach ($sliders as $slider)
        <tr>
            <td>{{ $slider->keterangan }}</td>
            <td>
                <img src="/image/{{ $slider->image }}" width="100px">
            </td>
            <td>
                <form action="{{ route('sliders.destroy',$slider->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('sliders.edit',$slider->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $sliders->links() !!}
        
@endsection