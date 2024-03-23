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
                <strong>Congraturations!</strong>{{ Session::get('success') }}
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
                        <th scope="col">Depart From</th>
                        <th scope="col">Destination</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @forelse ($schedules as $schedule)
                            <th scope="row">{{$schedule->id}}</th>
                            <td>{{$schedule->plane}}</td>
                            <td>{{$schedule->depart}}</td>
                            <td>{{$schedule->destination}}</td>
                            <td>{{$schedule->date}}</td>
                            <td>{{$schedule->time}}</td>
                            <td>
                                <form method="POST" action="{{ route('flight.destroy', $schedule->id) }}">
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js "
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js "
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous ">
    </script>
</body>

</html>
