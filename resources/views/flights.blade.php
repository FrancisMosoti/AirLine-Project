@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
    <style type="text/css">
        .div_deg {
            background-color: rgb(0, 0, 0, 0.8);
            width: 700px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
    </style>
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="card text-bg-dark">
                <img src="images/2.jpg" class="card-img" alt="..." width="400" height="800" />
                <div class="card-img-overlay">
                    <center>
                        <div class="div_deg">
                            <h3 style="color: rgb(252, 254, 254)">BOOK FLIGHTS ONLINE</h3>
                            <br />
                            <div class="container text-center">
                                <div class="row align-items-start">
                                    <div class="col">
                                        <form action="">
                                            <div>
                                                <input type=" submit " class="btn btn-primary" name="Round trip" value="Round trip" />
                                            </div>
                                            <br />
                                            <div>
                                                <label style="color: rgb(252, 254, 254)">Depart from:</label
                          >
                          <select name="text" id="town" class="form-select">
                            <option value="Nairobi">Nairobi</option>
                            <option value="Kisumu">Kisumu</option>
                            <option value="Mombasa">Mombasa</option>
                            <option value="Eldoret">Eldoret</option>
                          </select>
                        </div>
                        <br />
                        <div>
                          <label style="color: rgb(252, 254, 254)"
                            >Departure date:</label
                          >
                          <br />
                          <input type="date" name="date" />
                        </div>
                        <br />
                        <div>
                          <label style="color: rgb(252, 254, 254)"
                            >Passangers:</label
                          >
                          <br />
                          <select
                            name="Passangers"
                            id="Passangers"
                            class="form-select"
                          >
                            <option value="Adult">Adult</option>
                            <option value="Children">Children</option>
                          </select>
                        </div>
                      </form>
                    </div>
                    <div class="col">
                      <form action="">
                        <div>
                          <input
                            type=" submit "
                            class="btn btn-primary"
                            name="One-way"
                            value="One-way"
                          />
                        </div>
                        <br />
                        <div>
                          <label style="color: rgb(252, 254, 254)"
                            >Destination:</label
                          >
                          <select name="text" id="town" class="form-select">
                            <option value="Nairobi">Nairobi</option>
                            <option value="Kisumu">Kisumu</option>
                            <option value="Mombasa">Mombasa</option>
                            <option value="Eldoret">Eldoret</option>
                          </select>
                        </div>
                        <br />
                        <div>
                          <label style="color: rgb(252, 254, 254)"
                            >Return date(Round trip):</label
                          >
                          <br />
                          <input type="date" name="date" />
                        </div>
                        <br />
                        <div>
                          <label style="color: rgb(252, 254, 254)"
                            >Class:</label
                          >
                          <br />
                          <select name="class" id="class" class="form-select">
                            <option value="Class A">Class A</option>
                            <option value="Class B">Class B</option>
                            <option value="Class C">Class C</option>
                          </select>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <br />
                <h3 style="color: rgb(252, 254, 254)">Available offers</h3>
                <br />
                <div class="container text-center">
                  <div class="row align-items-start">
                    <div class="col">
                      <div>
                        <label style="color: rgb(252, 254, 254)">Student</label>

                                                <input type="checkbox" name="student" />
                                            </div>
                                            <br />
                                            <div>
                                                <label style="color: rgb(252, 254, 254)">Armed Forces</label
                        >

                        <input type="checkbox" name="armed forces" />
                      </div>
                    </div>
                    <div class="col">
                      <div>
                        <label style="color: rgb(252, 254, 254)"
                          >Non-stop flights</label
                        >

                        <input type="checkbox" name="non-stop flights" />
                      </div>
                      <br />
                      <div>
                        <label style="color: rgb(252, 254, 254)"
                          >Senior citizen</label
                        >

                        <input type="checkbox" name="senior citizen" />
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <input
                    type=" submit "
                    class="btn btn-primary"
                    name="BOOK FLIGHT"
                    value="BOOK FLIGHT"
                  />
                </div>
              </div>
            </center>
          </div>
        </div>
      </div>
    </main>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js "
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB "
      crossorigin="anonymous "
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js "
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 "
      crossorigin="anonymous "
    ></script>
  </body>
</html>
@endsection