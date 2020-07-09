@extends('layouts.app')


@section('content')
    <div class="container" style="width: 80%">
        <div class="row justify-content-center" style="padding-top: 10%; padding-bottom: 10%">

            <div class="card">
                <div class="card-header log-card-title">{{ __('Koreguoti gyvūno informaciją') }}</div>
                <form method="POST" enctype="multipart/form-data"
                      action="{{action('Admin\AnimalUpdateController@update')}}">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{$animal->id}}" name="id">
                    <div class="form-group-row">
                        <div class="form-group-row">
                            <label for="animal_name"
                                   class="form-group col-md-4 col-form-label text-md-right log-card-text">{{_('Gyvūno vardas')}}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('animal_name') is-invalid @enderror"  id="animal_name" placeholder="Gyvūno vardas"
                                       name="animal_name" autocomplete="off" value="{{$animal->animal_name}}">
                            </div>
                            @error('animal_name') {{'Privalote įvesti gyvūno vardą!'}} @enderror
                        </div>

                        <div class="form-group-row">
                            <label for="gender"
                                   class="form-group col-md-4 col-form-label text-md-right log-card-text">{{_('Lytis (Patinas/Patelė)')}}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('gender') is-invalid @enderror" id="gender" placeholder="Lytis"
                                       name="gender" autocomplete="off" value="{{$animal->gender}}">
                            </div>
                        </div>
                        @error('gender') {{'Privalote pasirinkti gyvūno lytį!'}} @enderror

                        <div class="form-group-row">
                            <label for="neutered"
                                   class="form-group col-md-4 col-form-label text-md-right log-card-text">{{_('Kastracija (Taip/Ne)')}}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('neutered') is-invalid @enderror" id="neutered" placeholder="Kastracija"
                                       name="neutered" autocomplete="off" value="{{$animal->neutered}}">
                            </div>
                            @error('neutered') {{'Privalote įvesti, ar buvo atlikta kastracija!'}} @enderror
                        </div>
                        <div class="form-group-row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="description" class="form-group col-md-4 col-form-label text-md-right log-card-text">Aprasymas</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                              rows="3">{{$animal->description}}</textarea>
                                </div>
                            </div>
                        </div>
                        @error('description') {{'Privalote įvesti gyvūno aprašymą!'}} @enderror
                        <div class="form-group-row">
                            <label for="years"
                                   class="form-group col-md-4 col-form-label text-md-right log-card-text">{{_('Amžius')}}</label>
                            <div class="col-md-6" style="padding-bottom: 2%">
                                <input type="text" class="form-control @error('years') is-invalid @enderror" id="years" placeholder="Amžius"
                                       name="years" autocomplete="off" value="{{$animal->years}}">
                            </div>
                            @error('animal_name') {{'Privalote įvesti gyvūno amžių!'}} @enderror
                        </div>
                        <div class="form-group-row">
                            <div class="col-md-6">
                                <label for="image">Įkelkite paveikslėlį</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                            <div class="col-md-6">
                                <img src="{{$image}}" class="@error('image') is-invalid @enderror" style="width: 50%"><br>
                                @error('animal_name') {{'Privalote įkelti nuotrauką, kuri užimtų ne daugiau kaip 10Mb!'}} @enderror

                                <button type="submit" class="btn btn-primary">Atnaujinti</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection
