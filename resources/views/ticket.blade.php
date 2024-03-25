<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Ticket</title>
    <script src="https://kit.fontawesome.com/79d53fd7ca.js" crossorigin="anonymous"></script>
    <style>
        /* body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #fff; White text 
        } */
        .ticket {
            width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #160969; /* Dark background */
            border-radius: 10px;
            color: #fff;
            font-family: Arial, Helvetica, sans-serif;
        }
        table {
            width: 100%;
            /* border-collapse: collapse; */
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #555; /* Darker background for header */
            color: #fff; /* White text */
        }
        tr:nth-child(odd) {
            background-color: rgba(255, 255, 255, 1); /* Transparent border lines between rows */
        }
        tr {
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class="ticket p-3">
        <table>
            
            <br> 
            <tr>
                <th>Flight</th>
                <th>Departure</th>
                <th>Destination</th>
                <th>Date/Time</th>
            </tr>
            <br>
            <tr>
                <td>{{$data['plane']}}</td>
                <td>{{$data['depart']}}</td>
                <td>{{$data['destination']}}</td>
                <td>{{$data['date']}} - {{$data['time']}}</td>
            </tr>  
            <br>         
            <tr>
            <td> Name: {{$data['name']}}</td>
               <td>Seat: 22A</td>
            <td>Phone: {{$data['phone']}}</td>
                    <td>Email: {{$data['email']}}</td>
            </tr>
            <br>
            <tr>
                <th colspan="3">Thank you for choosing Air-Away</th>
                
                <th><strong>Cost: ${{$data['price']}}</strong></th>
            </tr>
            <br>
        </table>
    </div>
</body>
</html>
