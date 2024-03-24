@extends('layouts.admin')

@section('content')

    <div class="container-fluid text-center pt-5"
        style="background: url('images/1.jpg'); background-size: cover;background-repeat: repeat; background-position: center; min-height: 100vh;">

        {{--  --}}
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show w-50 mx-auto" role="alert">
                <strong>Congrats!</strong>{{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        {{--  --}}
        <div class="mx-auto w-75 w-lg-75 p-3 mt-5" style="background-color: rgba(255, 254, 254, 0.8);">
            <h3 style="color: rgb(252, 254, 254)">Manage Planes</h3>
            <br />

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Plane Name</th>
                        <th scope="col">Class A seats</th>
                        <th scope="col">Class B seats</th>
                        <th scope="col">Class C seats</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @forelse ($planes as $plane)
                            <th scope="row">{{$plane->id}}</th>
                            <td>{{$plane->Plane_name}}</td>
                            <td>{{$plane->Class_A}}</td>
                            <td>{{$plane->Class_B}}</td>
                            <td>{{$plane->Class_C}}</td>
                            <td>
                                <form method="POST" action="{{ route('plane.destroy', $plane->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"  onclick="return confirm('Are you sure you want to delete this plane?');">Delete</button></td>
                            </form>

                                {{--  --}}
                                
                                
                            
                    </tr>
                @empty
                    <p>No planes</p>
                    @endforelse

                </tbody>
            </table>

        </div>

    </div>


@endsection