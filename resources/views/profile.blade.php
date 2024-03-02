<!DOCTYPE html>
<html>
<head>
    <title>Fejvoks</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/profile.css') }}">
    <script type="text/javascript" src="{{asset('assets/js/profile.js') }}"></script>
</head>
<body style="background-color: #EFEFEF">
    <div>
        <h1>
            Fejvoks<br>
            Conference<span>June3-June5, Chicago, U.S</span>
        </h1>
    </div>

    <form name="form1" action="{{ route('updateUserdetails') }}" method="post" onsubmit="return validate()">
    @csrf
    
        <h2 style="border: ridge; width: 100%; text-align: center;">USER DETAILS</h2><br>
        <pre>
Name: <input type="text" id="name1" name="name1" value="{{ $userdetails->name }}" disabled><br>
E-mail: <input type="email" id="email1" name="email" value="{{ $userdetails->email }}" disabled><br>
Gender: <input type="radio" id="gender1" name="gender" value="male" {{ ($userdetails->gender == 'male') ? 'checked' : '' }} disabled>male
        <input type="radio" id="gender2" name="gender" value="female" {{ ($userdetails->gender == 'female') ? 'checked' : '' }} disabled>female<br>
Date Of Birth: <input type="date" id="dob" name="dob" value="{{ $userdetails->d_o_b }}" disabled><br>
Religion: <input type="radio" id="religion1" name="religion" value="Christian" {{ ($userdetails->Religion == 'Christian') ? 'checked' : '' }} disabled>Christian
          <input type="radio" id="religion2" name="religion" value="Hindu" {{ ($userdetails->Religion == 'Hindu') ? 'checked' : '' }} disabled>Hindu
          <input type="radio" id="religion3" name="religion" value="Muslim" {{ ($userdetails->Religion == 'Muslim') ? 'checked' : '' }} disabled>Muslim<br>
Caste: <input type="radio" id="caste1" name="caste" value="OC" {{ ($userdetails->Caste == 'OC') ? 'checked' : '' }} disabled>OC
       <input type="radio" id="caste2" name="caste" value="BC" {{ ($userdetails->Caste == 'BC') ? 'checked' : '' }} disabled>BC
       <input type="radio" id="caste3" name="caste" value="SC" {{ ($userdetails->Caste == 'SC') ? 'checked' : '' }} disabled>SC
       <input type="radio" name="caste" id="caste4" value="Others" {{ ($userdetails->Caste == 'Others') ? 'checked' : '' }} disabled>Others<br>
Father's Name: <input type="text" id="fname" name="fname" value="{{ $userdetails->fname }}" disabled><br>
Father's Occupation: <input type="text" id="foccup" name="foccup" value="{{ $userdetails->foccup }}" disabled><br>
Mother's Name: <input type="text" id="mname" name="mname" value="{{ $userdetails->mname }}" disabled><br>
Mother's Occupation: <input type="text" id="moccup" name="moccup" value="{{ $userdetails->moccup }}" disabled><br>
Qualifications: 
<input type="checkbox" id="d1" name="qualif[]" value="HSC" {{ in_array("HSC", $qualif) ? 'checked' : '' }} disabled>HSC
<input type="checkbox" name="qualif[]" id="d2" value="Diplomo" {{ in_array("Diplomo", $qualif) ? 'checked' : '' }} disabled>Diplomo
<input type="checkbox" name="qualif[]" id="d3" value="UG" {{ in_array("UG", $qualif) ? 'checked' : '' }} disabled>UG
<input type="checkbox" name="qualif[]" id="d4" value="PG" {{ in_array("PG", $qualif) ? 'checked' : '' }} disabled>PG<br>
Address: <textarea rows="5" id="address" name="address" disabled>{{ $userdetails->address }}</textarea>
Contact number: <input type="number" id="number" name="number" value="{{ $userdetails->cnumber }}" disabled><br>
Degree: 
<input type="radio" id="degree1" name="degree" value="B.E." {{ ($userdetails->degree == 'B.E.') ? 'checked' : '' }} disabled>B.E.
<input type="radio" id="degree2" name="degree" value="M.E." {{ ($userdetails->degree == 'M.E.') ? 'checked' : '' }} disabled>M.E.
<input type="radio" id="degree3" name="degree" value="B.Ed" {{ ($userdetails->degree == 'B.Ed') ? 'checked' : '' }} disabled>B.Ed
<input type="radio" id="degree4" name="degree" value="M.Ed" {{ ($userdetails->degree == 'M.Ed') ? 'checked' : '' }} disabled>M.Ed
<input type="radio" id="degree5" name="degree" value="Ph.d" {{ ($userdetails->degree == 'Ph.d') ? 'checked' : '' }} disabled>Ph.d<br>
Known programming languages: 
<input type="checkbox" id="c1" name="langs[]" value="HTML" {{ in_array("HTML", $langs) ? 'checked' : '' }} disabled>HTML
<input type="checkbox" id="c2" name="langs[]" value="CSS" {{ in_array("CSS", $langs) ? 'checked' : '' }} disabled>CSS
<input type="checkbox" id="c3" name="langs[]" value="PHP" {{ in_array("PHP", $langs) ? 'checked' : '' }} disabled>PHP
<input type="checkbox" id="c4" name="langs[]" value="jQuery" {{ in_array("jQuery", $langs) ? 'checked' : '' }} disabled>jQuery<br>
Unique Id: <input type="text" name="unique_id" id="unique_id" value="{{ $userdetails->unique_id }}" readOnly>
</pre>
        <button onclick="editable()" type="button">Edit</button>
        <input style="height: 50px; width:100px;background-color:#efc9af;" type="submit" name="submit" id="submit" value="Submit" disabled/><br>    

        <center><font color="teal" size=5>© Fejvoks Conferences</font></center>
    </form>

