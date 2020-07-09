@extends('layouts.app')



@section('content')

    <div class="container">
        <div class="row justify-content-center" style="padding-top: 10%; padding-bottom: 10%">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header log-card-title">{{ __('Sukurti gyvūną') }}</div>
                    <form method="POST" enctype="multipart/form-data"
                          action="{{url('animal/create')}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id">
                        <div class="form-group-row">
                            <label for="breed_name"
                                   class="form-group col-md-4 col-form-label text-md-right log-card-text">{{_('Veislė')}}</label>
                            <div class="col-md-6">
                                <select class="form-control" id="breed_name" name="breed_name">
                                    @foreach ($breeds as $breed)
                                        <option value="{{$breed->name}}">{{$breed->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group-row">
                            <label for="animal_name"
                                   class="form-group col-md-4 col-form-label text-md-right log-card-text">{{_('Gyvūno vardas')}}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('animal_name') is-invalid @enderror" id="animal_name" placeholder="Gyvūno vardas"
                                       name="animal_name" autocomplete="off">
                            </div>
                            @error('animal_name') {{'Privalote įvesti gyvūno vardą!'}} @enderror
                        </div>
                        <div class="form-group-row">
                            <label for="gender"
                                   class="form-group col-md-4 col-form-label text-md-right log-card-text">{{_('Lytis')}}</label>
                            <div class="col-md-6">
                                <div class="radios @error('gender') is-invalid @enderror">
                                    <input type="radio" name='gender' value="Patinas">
                                    <label for=""> Patinas </label>
                                    <input type="radio" name='gender' value="Patelė">
                                    <label for=""> Patelė </label>
                                </div>
                            </div>
                            @error('gender') {{'Privalote pasirinkti gyvūno lytį!'}} @enderror
                        </div>
                        <div class="form-group-row">
                            <label for="neutered" class="col-md-4 col-form-label text-md-right log-card-text">
                                {{_('Ar gyvūnas kastruotas?')}} </label>
                            <div class="form-check ">
                                <input type="checkbox" class="@error('neutered') is-invalid @enderror" value="Taip" name="neutered">
                                <label> Taip </label><br>
                                <input type="checkbox" class="@error('neutered') is-invalid @enderror" value="Ne" name="neutered">
                                <label> Ne </label><br>
                            </div>
                            @error('neutered') {{'Privalote pasirinkti ar gyvūnas kastruotas!'}} @enderror
                        </div>
                        <div class="form-group-row">
                            <label for="description" id="description"
                                   class="form-group col-md-4 col-form-label text-md-right log-card-text">{{_('Gyvūno aprašymas')}}</label>
                            <div class="col-md-6">
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                              rows="3"></textarea>
                            </div>
                            @error('description') {{'Privalote įvesti gyvūno aprašymą!'}} @enderror
                        </div>
                        <div class="form-group-row">
                            <label for="years"
                                   class="form-group col-md-5 col-form-label text-md-right log-card-text">{{_('Gyvūno amžius')}}</label>
                            <div class="col-md-6">
                                <input type="number" min="0" step="1" class="form-control @error('years') is-invalid @enderror" id="years"
                                       placeholder="Gyvūno amžius" name="years">
                            </div>
                            @error('years') {{'Privalote įvesti gyvūno amžių!'}} @enderror
                        </div>
                        <div class="form-group-row">
                            <div class="form-group">
                                <div class="col-md-6">
                                <label for="image">Įkelkite nuotrauką</label>

                                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image">
                                </div>
                                @error('image') {{'Privalote įkelti nuotrauką, kuri užimtų ne daugiau kaip 10Mb!'}} @enderror
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">Sukurti</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
