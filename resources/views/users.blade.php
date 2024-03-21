@extends('layout')

@section('title', 'Liste Users') 
@section('content')
<h1 class="my-5">@lang('lang.text_users')</h1>

    <a href="{{route('user.create')}}"><button id="create">+ @lang('lang.text_create_user')</button></a><br><br><br>
    <div class="row">

        @forelse($users as $user)  <!--  forelse comme foreach mais execute le empty si aucune valeur -->
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
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                                    <!-- 2e param pour id -->
                    <a href="{{route('users.show', $user->id)}}" class="btn btn-sm btn-outline-primary">@lang('lang.text_btn_view')</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="alert alert-danger">Aucun utilisateurs à montrer</div>
        @endforelse

    </div>

    @endsection

