@extends('layouts.master')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Configuration</h2>
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
                  <th>Image</th>
                  <th>Metadata</th>
                  <th>WhatsApp</th>
                  <th>Footer Image</th>
                  <th>Footer Content</th>
                  <th>action</th>
                </tr>
                </thead>
                @foreach ($configs as $config)
                <tbody>
                <tr>
                    <td>{{ $config->title }}</td>
                    <td>
                        <div style="width: 100px;">
                            <img src="/image/{{ $config->image }}" alt="No Image" class="img-fluid mt-3">
                        </div>
                    </td>
                    <td><?php echo $config->metadata ?></td>
                    <td>{{ $config->wa }}</td>
                    <td>
                      <div style="width: 100px;">
                          <img src="/image/{{ config->footer_img }}" alt="No Image" class="img-fluid mt-3">
                      </div>
                  </td>
                    <td>{{ $config->footer_content }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('configs.edit',$config->id) }}">Edit</a>
                    </td>
                </tr>
        @endforeach
        </tbody>
    </table>
    
    {!! $configs->links() !!}
        
@endsection