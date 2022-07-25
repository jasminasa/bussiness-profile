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
    <script type="module">
        import {
            DataTable
        } from "{{asset('js/datatables.js')}}"
        const table = new DataTable("table")
    </script>
    <table class="table table-bordered">
        <thead>
        <tr>
        <th>Address</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Website</th>
        <th>Action</th>
        </tr>
        </thead>
        @foreach ($contacts as $contact)
        <tbody>
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
        </tbody>
    </table>
    
    {!! $contacts->links() !!}
        
@endsection