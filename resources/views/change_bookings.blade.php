<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" type="text/css" href="style.css" />

    <style type="text/css">
      .table_th {
        padding: 20px;
        font-size: 20px;
      }

      .table_td {
        padding: 20px;
        background-color: skyblue;
      }

      .div_deg {
        background-color: rgb(0, 0, 0, 0.8);
        width: 1000px;
        padding-top: 70px;
        padding-bottom: 70px;
      }
    </style>
  </head>

  <body>
    <main>
      <div class="container-fluid">
        <div class="card text-bg-dark">
          <img
            src="images/3.jpg"
            class="card-img"
            alt="..."
            width="400"
            height="800"
          />
          <div class="card-img-overlay">
            <center>
              <div class="div_deg">
                <aside>
                  <ul>
                    <li>
                      <a href="view_bookings.html">View</a>
                    </li>
                    <li>
                      <a href="">Change bookings</a>
                    </li>
                    <li>
                      <a href="">My profile</a>
                    </li>
                    <li>
                      <input
                        type=" submit "
                        class="btn btn-primary"
                        name="logout"
                        value="logout"
                      />
                    </li>
                  </ul>
                </aside>
                <div class="content">
                  <center>
                    <h1 style="color: rgb(252, 254, 254)">
                      Change your bookings
                    </h1>
                    <br />
                    <div class="container text-center">
                      <div class="row align-items-start">
                        <div class="col">
                          <form action="">
                            <div>
                              <input
                                type=" submit "
                                class="btn btn-primary"
                                name="Round trip"
                                value="Round trip"
                              />
                            </div>
                            <br />
                            <div>
                              <label style="color: rgb(252, 254, 254)"
                                >Depart from:</label
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
                              <select
                                name="class"
                                id="class"
                                class="form-select"
                              >
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
                    <br />
                    <div>
                      <input
                        type=" submit "
                        class="btn btn-primary"
                        name="Update ticket"
                        value="Update ticket"
                      />
                    </div>
                  </center>
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
