<!DOCTYPE html>
<html>
<head>  <title>Register</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/register.css') }}">
    <script type="text/javascript" src="{{ asset('assets/js/register.js') }}"></script>
</head>
<body style="background-color:EFEFEF">
   <div> <h1>
          Fejvoks<br>
         Conference<span>June3-June5,Chicago,U.S</span></h1></div>

<center> <form name="form1" action="{{ route('submitdata') }}" method="post" onsubmit="return validate()">
@csrf
<h2   style="border: ridge; width: 100%;text-align: center; ">REGISTRATION</h2><br>
<table border="1">
    
<tr><td align="right"><b>Name                :</b></td><td><input type="text" name="name1"></td></tr>
<tr><td align="right"><b>E-mail              :</b></td><td><input type="email" name="email"></td></tr>
<tr><td align="right"><b>Gender              :</b></td><td><input type="radio" id="gender" name="gender" value="male">male<input type="radio" id="gender" name="gender" value="female">female</td></tr>
<tr><td align="right"><b>Date Of Birth       :</b></td><td><input type="date" name="dob"></td></tr>
<tr><td align="right"><b>Religion            :</b></td><td><input type="radio" id="religion" name="religion" value="Christian">Christian<input type="radio" name="religion" value="Hindu">Hindu<input type="radio" name="religion" value="Muslim">Muslim</td></tr>
<tr><td align="right"><b>Caste               :</b></td><td><input type="radio" id="caste" name="caste" value="OC">OC<input type="radio" name="caste" value="BC">BC<input type="radio" name="caste" value="SC">SC<input type="radio" name="caste" value="Others">Others</td></tr>
<tr><td align="right"><b>Father's Name       :</b></td><td><input type="text" name="fname"></td></tr>
<tr><td align="right"><b>Father's Occupation :</b></td><td><input type="text" name="foccup"></td></tr>
<tr><td align="right"><b>Mother's Name       :</b></td><td><input type="text" name="mname"></td></tr>
<tr><td align="right"><b>Mother's Occupation :</b></td><td><input type="text" name="moccup" ></td></tr>
<tr><td align="right"><b>Qualifications      :</b></td><td><input type="checkbox" name="qualif[]" id="d1" value="HSC">HSC<input type="checkbox" name="qualif[]" id="d2" value="Diplomo">Diplomo<input type="checkbox" name="qualif[]" id="d3" value="UG">UG<input type="checkbox" name="qualif[]" id="d4" value="PG">PG</td></tr>
<tr><td align="right"><b>Address             :</b></td><td><textarea rows="5" name="address"></textarea></td></tr>
       
<tr><td align="right"><b>Contact number      :</b></td><td><input type="number" name="number"></td></tr>
<tr><td align="right"><b>Degree              :</td><td></b><input type="radio" id="degree" name="degree" value="B.E.">B.E.<input type="radio" name="degree" value="M.E.">M.E.<input type="radio" name="degree" value="B.Ed">B.Ed<input type="radio" name="degree" value="M.Ed">M.Ed<input type="radio" name="degree" value="Ph.d">Ph.d</td></tr>				  
<tr><td align="right"><b>Known programming 
    languages    : </td><td></b><input type="checkbox" id="c1" value="HTML" name="langs[]">HTML    <input type="checkbox" name="langs[]" value="CSS" id="c2">CSS     
<input type="checkbox" name="langs[]" id="c3" value="PHP">PHP     <input type="checkbox" name="langs[]" id="c4"value="jQuery">jQuery</td></tr>    
<input type="hidden" name="unique_id" id="unique_id">
         
               
<tr><td colspan="2" align="center"><b><input style="height:50px;width:100px;background-color:#efc9af;" type="submit" name="submit" value="Register"></b></td></tr>    
    </table></form></center><br>
    @if(session('uniqueId'))
    <script>
        var uniqueId = "{{ session('uniqueId') }}";
        alert("Your registration has been done successfully. Your Unique ID is: " + uniqueId);
    </script>
@endif
    
</div>
</pre style="font-color:rgb(81, 28, 88)"><center>© Fejvoks Conferences</font></center>
</body>
</html>