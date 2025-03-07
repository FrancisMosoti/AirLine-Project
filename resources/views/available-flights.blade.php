

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

        
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show w-50 mx-auto" role="alert">
                <strong>Congrats!</strong>{{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <div class="mx-auto w-75 w-lg-75 p-3 mt-5" style="background-color: rgb(0, 0, 0, 0.8);">
            <h3 style="color: rgb(252, 254, 254)">Available Flights</h3>
            <br />


            
            @forelse ($departures as $departure)
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <h5 class="card-title">Plane: {{ $departure->plane }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">From : {{ $departure->depart }} to: {{ $departure->destination }}</h6>
                    <p class="card-text">Class A price: {{ $departure->priceA }} </p>
                    <p class="card-text">Class B price: {{ $departure->priceB }} </p>
                    <p class="card-text">Class C price: {{ $departure->priceC }} </p>

                    <div class="d-flex justify-content-evenly">
                        <form action="{{route('book-enq')}}" method="post">
                            @csrf
    
                            <input type="text" value="{{ $departure->plane }}" name="name" id="" hidden>
                            <input type="text" value="{{ $departure->depart }}" name="depart" id="" hidden>
                            <input type="text" value="{{ $departure->destination }}" name="destination" id="" hidden>
                            <input type="text" value="{{ $departure->priceA }}" name="price" id="" hidden>
                            <input type="text" value="{{ $departure->date }}" name="date" id="" hidden>
                            <input type="text" value="{{ $departure->time }}" name="time" id="" hidden>
                            <button type="submit" class="btn btn-primary">Book Class A</button>
                            
                        </form>
                        <form action="{{route('book-enq')}}" method="post">
                            @csrf
        
                            <input type="text" value="{{ $departure->plane }}" name="name" id="" hidden>
                            <input type="text" value="{{ $departure->depart }}" name="depart" id="" hidden>
                            <input type="text" value="{{ $departure->destination }}" name="destination" id="" hidden>
                            <input type="text" value="{{ $departure->priceB }}" name="price" id="" hidden>
                            <input type="text" value="{{ $departure->date }}" name="date" id="" hidden>
                            <input type="text" value="{{ $departure->time }}" name="time" id="" hidden>
                            <button type="submit" class="btn btn-primary">Book Class B</button>
                            
                        </form>
                        <form action="{{route('book-enq')}}" method="post">
                            @csrf
        
                            <input type="text" value="{{ $departure->plane }}" name="name" id="" hidden>
                            <input type="text" value="{{ $departure->depart }}" name="depart" id="" hidden>
                            <input type="text" value="{{ $departure->destination }}" name="destination" id="" hidden>
                            <input type="text" value="{{ $departure->priceC }}" name="price" id="" hidden>
                            <input type="text" value="{{ $departure->date }}" name="date" id="" hidden>
                            <input type="text" value="{{ $departure->time }}" name="time" id="" hidden>
                            <button type="submit" class="btn btn-primary">Book Class C</button>
                            
                        </form>

                    </div>


                    
                    

                </div>
            </div>
            @empty
                <p class="text-danger fw-3">No Flights</p>
            @endforelse

            
        </div>

    </div>

    <div class="available-flights row"></div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js "
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js "
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous ">
    </script>
</body>

</html>
