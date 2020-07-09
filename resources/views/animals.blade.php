@extends('.template')

@section('content')



    <div class="container" style="padding-top: 10%">

        <div class="row">
            @foreach($animals as $animal)
                <div class="column" style="padding-bottom: 10px">
                    <div class="card card-st h-100">
                        <div class="card  card-st">
                            <img class="card-img-top" src="{{asset('uploads/cats/'. $animal->image)}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="font-weight: bold">{{$animal['breed_name']}}</h5>
                                <p class="card-text-animals">Vardas: {{$animal['animal_name']}}</p>
                                <p class="card-text-animals">Lytis: {{$animal['gender']}}</p>
                                <p class="card-text-animals">Kastracija: {{$animal['neutered']}}</p>
                                <p class="card-text-animals">Gyvūno aprašymas: {{$animal['description']}}</p>
                                <p class="card-text-animals">Guvūno amžius: {{$animal['years']}}</p>
                                <button class="btn adopt disabled"><a href="/add_adopted/{{$animal->id}}"> Priglausti šį augintinį </a></button>
                            </div>

                            @can('manage-users')
                                <div class="card-footer" style="margin-bottom: 0">
                                    <h6><a href="/admin/update/{{$animal->id}}">Redaguoti informaciją</a>
                                    </h6>
                                </div>
                            @endcan
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



@endsection
