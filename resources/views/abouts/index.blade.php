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
     
    <table class="table table-bordered">
        <tr>
            <th>About Us Title</th>
            <th width="280px">Description</th>
            <th>Visi</th>
            <th>Misi</th>
            <th>Action</th>
        </tr>
        @foreach ($abouts as $about)
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
    </table>
    
    {!! $abouts->links() !!}
        
@endsection