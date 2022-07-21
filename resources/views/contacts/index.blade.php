@extends('layouts.master')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Contact Us</h2>
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
        <th>Address</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Website</th>
        <th>Action</th>
        </tr>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{ $contact->alamat }}</td>
            <td>{{ $contact->telp }}</td>
            <td> {{ $contact->email }}</td>
            <td>{{ $contact->web }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('contacts.edit',$contact->id) }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $contacts->links() !!}
        
@endsection