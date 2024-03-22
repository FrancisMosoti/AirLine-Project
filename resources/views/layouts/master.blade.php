<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air-Away</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" >
    <script src="https://kit.fontawesome.com/79d53fd7ca.js" crossorigin="anonymous"></script>
</head>
<body>

    <header class="bg-blue">
    <nav class="navbar navbar-expand-lg text-white">
  <div class="container-fluid">
    <a class="navbar-brand margin-right text-white" href="#">Air <i class="fa-solid fa-plane-departure"></i> Away</a>
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-white" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active text-white pl-2" aria-current="page" href="#">Home</a>
        <a class="nav-link text-white pl-2" href="#">Explore</a>
        <a class="nav-link text-white pl-2" href="#">Booking</a>
        <a class="nav-link text-white pl-2" >Help</a>
      </div>
    </div>
  </div>
</nav>
    </header>
    @yield("content")

    <footer class="pt-4 mt-4 ">
        <div class="row">
            <div class="col-md-4 pl-4">
                <h1 class="text-center">About Us</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea incidunt veritatis debitis animi quaerat laboriosam esse qui facilis totam odio?</p>
            </div>
            <div class="col-md-3">
                <h1 class="text-center">Socials</h1>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h1 class="text-center">Quick Links</h1>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h1 class="text-center">FAQ's</h1>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
