@extends('layout')

@section('title', 'User') 
@section('content')
    
    <h1 class="my-5">@lang('lang.text_user')</h1>
    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card mb-4">
                <div class="card-header">
                    <div class="card-title">{{$user->nom}}</div>
                </div>
                <div class="card-body">
    
                <ul class="list-unstyled">
                    <li><strong>@lang('lang.text_adress') : </strong>{{$user->adresse}}</li>
                    <li><strong>@lang('lang.text_phone') : </strong>{{$user->telephone}}</li>
                    <li><strong>@lang('lang.text_email') : </strong>{{$user->email}}</li>
                    <li><strong>@lang('lang.text_birth') : </strong>{{$user->date_de_naissance}}</li>
                    <li><strong>@lang('lang.text_city') : </strong>{{$user->ville->nom}}</li>
                    </ul>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <!-- edit btn -->
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-outline-success">@lang('lang.text_btn_edit')</a>
                    <!-- delete btn -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteModal">
                    @lang('lang.text_btn_delete')
                    </button>
                </div>
            </div>
        </div>

    </div>

    <!-- Button trigger modal -->
    

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteModalLabel">Delete</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <b>are you sure you want to delete this user : </b> {{ $user->title }} <b>?</b>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form action="" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                
            </div>
            </div>
        </div>
    </div>

@endsection