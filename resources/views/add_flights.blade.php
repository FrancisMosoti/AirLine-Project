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
    {{-- <style type="text/css"> --}}

    {{-- </style> --}}
</head>

<body>
    <div class="container-fluid text-center pt-5" style="background: url('images/1.jpg'); background-size: cover;background-repeat: repeat; background-position: center; min-height: 100vh;">
        <div class="mx-auto w-75 p-3 mt-5" style="background-color: rgb(0, 0, 0, 0.8);">
            <h3 style="color: rgb(252, 254, 254)">ADD FLIGHTS</h3>
            <br />
            <div class="row">
                <div class="col-lg-6">
        
                        <div>
                            <label style="color: rgb(252, 254, 254)">Depart from:</label>
                            <select name="text" id="town" class="form-select">
                                <option value="Nairobi">Nairobi</option>
                                <option value="Kisumu">Kisumu</option>
                                <option value="Mombasa">Mombasa</option>
                                <option value="Eldoret">Eldoret</option>
                            </select>
                        </div>
        
                        <div>
                            <label style="color: rgb(252, 254, 254)">Passangers:</label>
                            <br />
                            <select name="Passangers" id="Passangers" class="form-select">
                                <option value="Adult">Adult</option>
                                <option value="Children">Children</option>
                            </select>
                        </div>
        
                </div>
                <div class="col-lg-6">
                    <div>
                        <label style="color: rgb(252, 254, 254)">Destination:</label>
                        <select name="text" id="town" class="form-select">
                            <option value="Nairobi">Nairobi</option>
                            <option value="Kisumu">Kisumu</option>
                            <option value="Mombasa">Mombasa</option>
                            <option value="Eldoret">Eldoret</option>
                        </select>
                    </div>
                    <br />
                    <div>
                        <label style="color: rgb(252, 254, 254)">Return date(Round
                            trip):</label>
                        <br />
                        <input type="time" name="date" />
                    </div>
                    <br />
                    <div>
                        <label style="color: rgb(252, 254, 254)">Class:</label>
                        <br />
                        <select name="class" id="class" class="form-select">
                            <option value="Class A">Class A</option>
                            <option value="Class B">Class B</option>
                            <option value="Class C">Class C</option>
                        </select>
                    </div>
        
                </div>
            </div>
        
            <div>
                <input type=" submit " class="btn btn-primary" name="BOOK FLIGHT" value="BOOK FLIGHT" />
            </div>
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


