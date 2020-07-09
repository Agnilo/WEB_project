@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="padding-top: 10%; padding-bottom: 10%">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Naudotojai</div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Vartotojo vardas</th>
                                <th scope="col">El. paštas</th>
                                <th scope="col">Vaidmuo</th>
                                <th scope="col" style="text-align: center"> Veiksmas</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ implode(', ', $user-> roles()->get()->pluck('name')->toArray())}}</td>
                                    <td>
                                        @can('edit-users')
                                            <a href="{{route('admin.users.edit', $user->id)}}">
                                                <button type="button" class="btn btn-primary float-right"> Redaguoti
                                                </button>
                                            </a>
                                        @endcan

                                        @can('delete-users')
                                            <form action="{{route('admin.users.destroy', $user)}}" method="POST"
                                                  class="float-left">
                                                @csrf
                                                {{method_field('DELETE')}}
                                                <button type="submit" class="btn btn-warning"> Ištrinti</button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
