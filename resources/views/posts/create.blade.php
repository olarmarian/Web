@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf

        <div class="col-8 offset-2">
            <div><h1>Add New Post</h1></div>
            <div class="form-group row">
                <label for="caption" class="col-md-4 col-form-label">Post caption</label>

                <input id="name"
                        type="text"
                        class="form-control{{ $errors->has('caption') ? 'is-invalid' : '' }}" 
                        name="caption"
                        value="{{ old('caption') }}" 
                        required autocomplete="caption" autofocus>

                @if ($errors->has('caption'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('caption') }}</strong>
                    </span>
                @endif

            </div>
        
            <div class="row">
            <label for="image" class="col-md-4 col-form-label">Post image</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @if ($errors->has('image'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                @endif

            </div>
            <div class="row pt-4">
                <button class="btn btn-primary">Add New Post</button>

            </div>
        </div>
    </form>

</div>
@endsection
