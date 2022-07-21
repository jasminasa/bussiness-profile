@extends('layouts.master')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-right">
                <a class="btn btn-primary" href="{{ route('configs.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <br>  
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        
    <form action="{{ route('configs.update', $config->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title</strong>
                        <input type="text" name="title" class="form-control" @error('title') is-invalid @enderror placeholder="Title" value="{{$config[0]->title}}">
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Image</strong>
                        <input type="hidden" name="oldImage" value="{{ $config[0]->image }}">
                        @if ($config[0]->image)
                            <img src="/image/{{ $config->image }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @else
                            <img class="img-preview img-fluid mb-3">
                        @endif
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" @error('image') is-invalid @enderror name="image" id="image" onchange="previewImage()">
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Metadata</strong>
                        <input id="metadatas" type="hidden" name="metadata" class="form-control" value="{{$config[0]->metadata}}">
                        <trix-editor input="metadatas"></trix-editor>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>WhatsApp</strong>
                        <input type="text" name="wa" class="form-control" @error('wa') is-invalid @enderror placeholder="wa" value="{{$config[0]->wa}}">
                        @error('wa')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Footer Image</strong>
                        <input type="hidden" name="oldFooterImage" value="{{ $config[0]->footer_img }}">
                        @if ($config[0]->footer_img)
                            <img src="/image/{{ $config->footer_img }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @else
                            <img class="img-preview img-fluid mb-3">
                        @endif
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" @error('footer_img') is-invalid @enderror name="footer_img" id="footer_img" onchange="previewImage()">
                            @error('footer_img')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Footer Content</strong>
                        <input type="text" name="footer_content" class="form-control" @error('footer_content') is-invalid @enderror placeholder="Footer Content" value="{{$config[0]->footer_content}}">
                        @error('footer_content')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        
    </form>
@endsection