@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="col-8 offset-2">
            <div><h1>Edit Profile</h1></div>
            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label">Title</label>

                <input id="name"
                        type="text"
                        class="form-control{{ $errors->has('title') ? 'is-invalid' : '' }}" 
                        name="title"
                        value="{{ old('title') ?? $user->profile->title }}" 
                        required autocomplete="title" autofocus>

                @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif

            </div>
        
            <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label">Description</label>

                <input id="name"
                        type="text"
                        class="form-control{{ $errors->has('description') ? 'is-invalid' : '' }}" 
                        name="description"
                        value="{{ old('description') ?? $user->profile->description }}" 
                        required autocomplete="description" autofocus>

                @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif

            </div>

            <div class="form-group row">
                <label for="url" class="col-md-4 col-form-label">Url</label>

                <input id="name"
                        type="text"
                        class="form-control{{ $errors->has('url') ? 'is-invalid' : '' }}" 
                        name="url"
                        value="{{ old('url') ?? $user->profile->url }}" 
                        required autocomplete="url" autofocus>

                @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif

            </div>



            <div class="row">
            <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @if ($errors->has('image'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                @endif

            </div>
            <div class="row pt-4">
                <button class="btn btn-primary">Save Profile</button>

            </div>
        </div>
    </form>

</div>
@endsection
