<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PerWeb</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('css/main.css')}}" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
    <form action="{{route('register.action')}}" method="POST">
        @csrf
    <div class="box-form">
        <div class="left">
            <div class="overlay">
            <h1>PerdWeb</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Curabitur et est sed felis aliquet sollicitudin</p>
            </div>
        </div>
            {{-- <form action="{{route('register.action')}}" method="POST"> --}}
                <div class="right">
                <h5>Register</h5>
                <div class="inputs">
                <input type="text" placeholder="username" name="name">
                <br>
                <input type="email" placeholder="email" name="email">
                <br>
                <input type="password" placeholder="password" name="password">
                 </div>
                <br><br>
                <div class="remember-me--forget-password">
                <p>Dont have account?</p>
                </div>
                <br>
                <button type="submit" value="Submit">Register</button>
            </div>
        </div>
    </form> 
    </div>
<!-- partial -->
  
</body>
</html>
