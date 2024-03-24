@extends('layouts.admin')

@section('content')

    <div class="container-fluid text-center pt-5"
        style="background: url('images/1.jpg'); background-size: cover;background-repeat: repeat; background-position: center; min-height: 100vh;">

        {{--  --}}
        @if(Session::has('success'))        
        <div class="alert alert-success alert-dismissible fade show w-50 mx-auto" role="alert">
            <strong>Congrats!</strong>{{Session::get('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
        {{--  --}}
        <div class="mx-auto w-50 w-lg-50 p-3 mt-5" style="background-color: rgb(0, 0, 0, 0.8);">
            <h3 style="color: rgb(252, 254, 254)">Register A Plane</h3>
            <br />
            <form action="{{route('reg-plane')}}" method="post">
                @csrf
            <div class="row">
                <div class="col-lg-6">

                    <div class="mb-4">
                        <label style="color: rgb(252, 254, 254)" id="plane">Plane Name</label>
                        <input type="text" name="plane" id="plane"
                            class="form-control @error('plane') is-invalid @enderror" value="{{ old('plane')?old('plane'):'' }}">
                            @error('plane')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    </div>

                    <div class="mb-4">
                        <label style="color: rgb(252, 254, 254)" id="plane1">Class A seats</label>
                        <input type="text" name="classA" id="plane1"
                            class="form-control @error('classA') is-invalid @enderror" value="{{ old('classA')?old('classA'):'' }}">
                            @error('classA')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="mb-4">
                        <label style="color: rgb(252, 254, 254)" id="plane2">Class B seats</label>
                        <input type="text" name="classB" id="plane2"
                            class="form-control @error('classB') is-invalid @enderror" value="{{ old('classB')?old('classB'):'' }}">
                            @error('classB')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    </div>

                    <div class="mb-4">
                        <label style="color: rgb(252, 254, 254)" id="plane3">Class C seats</label>
                        <input type="text" name="classC" id="plane3"
                            class="form-control @error('classC') is-invalid @enderror" value="{{ old('classC')?old('classC'):'' }}">
                            @error('classC')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    </div>


                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </div>

    </div>

@endsection