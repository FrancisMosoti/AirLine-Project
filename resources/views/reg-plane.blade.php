<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />

</head>

<body>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js "
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js "
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous ">
    </script>
</body>

</html>
