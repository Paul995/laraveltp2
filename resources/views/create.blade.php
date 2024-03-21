 <!-- commence toujours a partir du dossier views  -->
 @extends('layout')
@section('title','Ajout User')
@section('content')
<br><br>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Ajouter Nouvel User</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <!-- on doit mettre le token sinon error 419 (comme input hidden) -->
                    @csrf
                    <div class="mb-3">
                       <label for="nom" class="form-label">nom</label>        
                        <input type="text" name="nom" id="nom" class="form-control" value="{{old('nom')}}">
                        @if($errors->has('nom'))
                        <div class="text-danger mt2-2">
                            {{$errors->first('nom')}}
                        </div>
                        @endif
                    </div>

                    <div class="mb-3">
                            <label for="password" class="form-label">@lang('lang.text_pwd')</label>
                            <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">
                        </div>
                   
                    <div class="mb-3">
                       <label for="adresse" class="form-label">adresse</label>        
                        <input type="text" name="adresse" id="adresse" class="form-control" value="{{old('adresse')}}">
                        @if($errors->has('adresse'))
                        <div class="text-danger mt2-2">
                            {{$errors->first('adresse')}}
                        </div>
                        @endif
                    </div>
                    
                    <div class="mb-3">
                       <label for="telephone" class="form-label">telephone</label>        
                        <input type="text" name="telephone" id="telephone" class="form-control" value="{{old('telephone')}}">
                        @if($errors->has('telephone'))
                        <div class="text-danger mt2-2">
                            {{$errors->first('telephone')}}
                        </div>
                        @endif
                    </div>

                    <div class="mb-3">
                       <label for="email" class="form-label">email</label>        
                        <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}">
                        @if($errors->has('email'))
                        <div class="text-danger mt2-2">
                            {{$errors->first('email')}}
                        </div>
                        @endif
                    </div>
                     
                    <div class="mb-3">
                        <label for="date_de_naissance" class="form-label">Due Date</label>
                       <input type="date" name="date_de_naissance" id="date_de_naissance" class="form-control" value="{{old('date_de_naissance')}}">  <!-- check bootstraps date-picker  -->
                       @if($errors->has('date_de_naissance'))
                            <div class="text-danger mt-2">
                                {{ $errors->first('date_de_naissance')}}
                            </div>
                            @endif
                    </div>

                    <div class="mb-3">
                    <label for="ville_id" class="form-label">Ville</label>
                    <select name="ville_id" id="ville_id" class="form-control">
                        <option value="">Select a Ville</option>
                        @foreach($villes as $ville)
                            <option value="{{ $ville->id }}" {{ (old('ville_id') == $ville->id) ? 'selected' : '' }}>
                                {{ $ville->nom }}
                            </option>
                        @endforeach
                    </select>
                        @if($errors->has('ville_id'))
                        <div class="text-danger mt2-2">
                            {{$errors->first('ville_id')}}
                        </div>
                        @endif
                    </div>
                  
                    <button type="submit" class="btn btn-primary" value="Save">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

