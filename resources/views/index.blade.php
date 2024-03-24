@extends('layouts.master')

@section('content')

<main>
    <div class="hero-section">
        <div class="hero-text text-center text-white">
            <h2 class="alef-bold">Explore the World with Air - Away</h2>
            <p class="alef-regular">Sign up to receive exclusive flight offers and hotel deals tailored to your dream destinations.</p>

            <a href="{{route('flight.search')}}" class="btn btn-main">BOOK YOUR FLIGHT</a>

        </div>
    </div>
    <div class="row search-flights">
    <form action="{{ route('flight.search') }}" method="post">
                @csrf

               <div class="row">
               <div class="col-md-3">
                    <label style="color: rgb(252, 254, 254)" id="plane2">Departure date</label>
                    <input type="date" name="date" id="plane2"
                        class="form-control @error('date') is-invalid @enderror"
                        value="{{ old('date') ? old('date') : '' }}">
                    @error('date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                
                <div class="col-md-3">
                    <label style="color: rgb(252, 254, 254)">Depart from:</label>
                    <select id="town" name="depart" class="form-select @error('depart') is-invalid @enderror">
                        <option value="" selected>Select Airport</option>
                        <option value="Nairobi">Nairobi</option>
                        <option value="Kisumu">Kisumu</option>
                        <option value="Mombasa">Mombasa</option>
                        <option value="Eldoret">Eldoret</option>
                    </select>
                    @error('depart')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="col-md-3">
                    <label style="color: rgb(252, 254, 254)">Destination:</label>
                    <select id="town" name="destination"
                        class="form-select @error('destination') is-invalid @enderror">
                        <option value="" selected>Select Airport</option>
                        <option value="Nairobi">Nairobi</option>
                        <option value="Kisumu">Kisumu</option>
                        <option value="Mombasa">Mombasa</option>
                        <option value="Eldoret">Eldoret</option>
                    </select>
                    @error('destination')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-3">
                    <button type="submit" class="btn bg-white">Search-flight</button>
                </div>
               </div>
            </form>
      
    </div>
    <div class="beautiful row">
        <div class="col-md-6 beautiful-image">
            <img src="https://images.pexels.com/photos/1268855/pexels-photo-1268855.jpeg?auto=compress&cs=tinysrgb&w=400">
        </div>
        <div class="col-md-6 beautiful-text">
            <h2>Discover Exotic Locations</h2>
            <p>Embark on a journey to breathtaking destinations across the globe. Whether it's serene beaches, majestic mountains, or vibrant cities, we have flights to fulfill your wanderlust. Experience the thrill of exploring new cultures, savoring local cuisines, and immersing yourself in unforgettable adventures. With Air - Away, your next unforgettable travel experience awaits.</p>
            
            <button class="btn btn-main">EXPLORE NOW</button>
        </div>
    </div>
    
    <div class="row hotels">
        <div class="col-md-6 ">
            <div class="hotels-txt">
                <h3>Stay in Comfort</h3>
                <p>Indulge in luxury accommodation options offered at unbeatable prices. Our hotel partners ensure a relaxing stay, so you can focus on creating lasting memories. From boutique hotels to all-inclusive resorts, we cater to every traveler's preferences. With amenities designed to exceed your expectations, your comfort and satisfaction are our top priorities. Book your stay with Air - Away and elevate your travel experience to new heights.</p>
                
                <button class="btn btn-main">BOOK YOUR STAY</button>
            </div>
        </div>
        <div class="col-md-6 images">
            <img src="https://images.pexels.com/photos/338504/pexels-photo-338504.jpeg?auto=compress&cs=tinysrgb&w=400" alt="hotel room">
            <img src="https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=400" alt="luxury resort">
        </div>
    </div>

</main>

@endsection
