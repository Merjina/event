<!DOCTYPE html>
<html>
<head>
    <title>Fejvoks</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fejvoks.css') }}">
</head>
<body style="background-color: lavender">
    <div>
        <h1>Fejvoks<br>Conference<span>June 3-June 5, Chicago, U.S</span></h1>
    </div>
    <nav>
        <pre>
            <center>
    <a href="{{ route('home') }}">Home</a>     <a href="{{ route('schedule') }}">Schedule</a>     <a href="{{ route('speaker') }}">Speakers</a>     <a href="{{ route('venue') }}">Venue</a>     <a href="{{ route('loginpage') }}">Profile</a>
            </center>
        </pre>
    </nav>
    
    <center>
        <img id="m1" src="{{asset('assets/img/Conference picture.jpg') }}" alt="Conference Picture">
    </center>
    <p>
        <center>
            Dedicating to the Craft of Building Websites<br>
            Every year the brightest web designers and front-end developers<br>
            descend on Pune to discuss the latest technologies.<br>
            Join us this June!
        </center>
    </p>
    <center>
        <a href="{{ route('register') }}">
            <button name="subject" type="submit" value="HTML"><b>REGISTER NOW</b></button>
        </a>
    </center>
</body>
</html>
