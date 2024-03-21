@extends('layout') 
@section('title', 'Login')
@section('content')

    @if(!$errors->isEmpty())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">@lang('lang.text_login')</h5>
                </div>
                <div class="card-body">
                    <form method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">@lang('lang.text_email')</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">@lang('lang.text_pwd')</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary">@lang('lang.text_login')</button>
                    </form>
                </div>
            </div>
            <br><br><br>
            <a href="{{route('user.create')}}"><button class="create" style="line-height:1;padding:5px">+ @lang('lang.text_create_user')</button></a>
        </div>
    </div>
@endsection