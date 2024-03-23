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
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show w-50 mx-auto" role="alert">
                <strong>Congrats!</strong>{{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        {{--  --}}
        <div class="mx-auto w-50 w-lg-50 p-3 mt-5" style="background-color: rgb(0, 0, 0, 0.8);">
            <h3 style="color: rgb(252, 254, 254)">Book Flights</h3>
            <br />


            {{--  --}}
            <form action="" method="post">
                @csrf

                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-6 col-form-label text-light">Plane Name</label>
                    <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext text-primary" id="staticEmail"
                            value="{{ $data['plane'] }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-6 col-form-label text-light">Price</label>
                    <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext text-primary" id="staticEmail"
                            value="{{ $data['price'] }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-6 col-form-label text-light">Where From</label>
                    <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext text-primary" id="staticEmail"
                            value="{{ $data['depart'] }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-6 col-form-label text-light">Destination</label>
                    <div class="col-sm-6">
                        <input type="text" readonly class="form-control-plaintext text-primary" id="staticEmail"
                            value="{{ $data['destination'] }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label style="color: rgb(252, 254, 254)" id="plane"
                        class="col-sm-6 col-form-label text-light">Your Name</label>
                    <div class="col-sm-6">
                        <input type="text" name="name" id="plane"
                            class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') ? old('name') : '' }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label style="color: rgb(252, 254, 254)" id="plane"
                        class="col-sm-6 col-form-label text-light">Your email</label>
                    <div class="col-sm-6">
                        <input type="text" name="email" id="plane"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') ? old('email') : '' }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label style="color: rgb(252, 254, 254)" id="plane"
                        class="col-sm-6 col-form-label text-light">Your Phone Number</label>
                    <div class="col-sm-6">
                        <input type="text" name="phone" id="plane"
                            class="form-control @error('phone') is-invalid @enderror"
                            value="{{ old('phone') ? old('phone') : '' }}">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>


            {{--  --}}


            {{--  --}}
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
