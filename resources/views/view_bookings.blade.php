<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
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
    </style>
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="card text-bg-dark">
                <img src="images/3.jpg" class="card-img" alt="..." width="400" height="800" />
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
                                </ul>
                            </aside>
                            <div class="content">
                                <center>
                                    <h1>View your bookings</h1>

                                    <table border="1px">
                                        <tr>
                                            <th class="table_th">FROM/TO</th>
                                            <th class="table_th">DATE/TIME</th>
                                            <th class="table_th">PASSANGER</th>
                                            <th class="table_th">SEAT</th>
                                            <th class="table_th">BAGS</th>
                                        </tr>
                                    </table>
                                    <br />
                                    <br />
                                    <div>
                                        <input type=" submit " class="btn btn-primary" name="Download ticket" value="Download ticket" />
                                    </div>
                                </center>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js " integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous "></script>
</body>

</html>