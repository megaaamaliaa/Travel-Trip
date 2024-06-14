<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Tiket</title>
     <style type="text/css" >
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            width: 100%;
            max-height: 100%;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 25px;
            color: #333;
        }
        .logo {
            padding-top: 50px;
            text-align: center;
        }
        .logo h1 {
            font-family: "Yesteryear";
        }
        .content {
            margin: 20px 0;
            text-align: start;
            padding-left: 40px;
            padding-top: 100px;
        }
        .content p {
            font-size: 14px;
            line-height: 1.5;
        }
        .footer {
            text-align: end;
            margin-top: 200px;
            font-size: 12px;
            color: #666;
            padding-left: 50px;
            padding-top: 50px;
        }
        .footer a {
            color: #666;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <main>
      <div class="section-sukses d-flex align-item-center body">
        <div class="col text-center">
          <div class="container">
            <div class="header">
            <h1>Dont Forget Your E-Ticket!</h1>
            </div>
            <div class="logo" >
                <h1>OpenTrip.id</h1>
            </div>
            <div class="content">
            <h3>Hi, {{ $item->users->name }}</h3>
            <h3>Your Digital Ticket Has Been Successful</h3>
            <h3><strong>Booking ID:</strong> {{ $item->id }}</h3> <br>
            <h4><strong>Travel Details</strong></h4>
            <p> Nama User      : {{ $item->users->name }} </p>
            <p> Location       : {{ $item->travel_packages->title }}  </p>
            <p> Date And Time  : {{\Carbon\Carbon::create($item->departure_date)->format('F d, Y')}} </p>
            </div>

            <div class="footer">
                <hr>
            <p>Contact Us <br>
            <a href="mailto:support@TravelTrip.id">Support@TravelTrip.id</a> <br>
            085728598894</p>
        </div>
    </div>
        </div>
      </div>
    </main>


</body>
</html>


