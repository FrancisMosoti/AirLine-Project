@extends('layouts.admin')

@section('content')

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


@endsection
