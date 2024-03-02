
function validate(){
    var namef=document.form1.name1;
    var emailf=document.form1.email;
    var genderf=document.form1.gender;
    var genderf2=document.getElementById("gender");
    var dobf=document.form1.dob;
    var relf=document.form1.religion;
    var relf2=document.getElementById("religion");
    var castef=document.form1.caste;
    var castef2=document.getElementById("caste");
    var fnamef=document.form1.fname;
    var focupf=document.form1.foccup;
    var mnamef=document.form1.mname;
    var mocupf=document.form1.moccup;
    var addressf=document.form1.address;
    var numf=document.form1.number;
    var degreef=document.form1.degree;
    var degreef2=document.getElementById("degree1");
     
 
         if (namef.value.length <= 0) {    
             alert("Name is required");    
             namef.focus();    
             return false;    
         }
         if (emailf.value.length <= 0) {    
             alert("Email Id is required");    
             emailf.focus();    
             return false;    
         }
         if (genderf.value.length <= 0) {    
             genderf2.focus();
             alert("Gender is required");   
             return false;    
         }       
         
         if (dobf.value.length <= 0) {    
             alert("D.O.B number is required");    
             dobf.focus();    
             return false;    
         }     
             
         if (relf.value.length <= 0) {    
             alert("Religion is required");    
             relf2.focus();    
             return false;    
         }
         if (castef.value.length <= 0) {    
             alert("Caste number is required");    
             castef2.focus();    
             return false;    
         }
         if (fnamef.value.length <= 0) {    
             alert("Father's Name number is required");    
             fnamef.focus();    
             return false;    
         }
         if (focupf.value.length <= 0) {    
             alert("Father's Occupation number is required");    
             focupf.focus();    
             return false;    
         }
         if (mnamef.value.length <= 0) {    
             alert("Mother's Name is required");    
             mnamef.focus();    
             return false;    
         }
         if (mocupf.value.length <= 0) {    
             alert("Mother's Occupation number is required");    
             mocupf.focus();    
             return false;    
         }
         if (addressf.value.length <= 0) {    
             alert("Address is required");    
             addressf.focus();    
             return false;    
         }
         if (numf.value.length <= 0) {    
             alert("Mobile number is required");    
             numf.focus();    
             return false;    
         }
         if (degreef.value.length <= 0) {    
             alert("Degree is required");    
             degreef2.focus();    
             return false;    
         }
         return true; 
 }
 function editable(){
    
     document.getElementById("name1").disabled   = false;
     document.getElementById("email1") .disabled = false;
     document.getElementById("gender1").disabled = false;
     document.getElementById("gender2").disabled = false;
     document.getElementById("dob").disabled     = false;
     document.getElementById("religion1").disabled= false;
     document.getElementById("religion2").disabled= false;
     document.getElementById("religion3").disabled= false;
     document.getElementById("caste1").disabled   = false;
     document.getElementById("caste2").disabled   = false;
     document.getElementById("caste3").disabled   = false;
     document.getElementById("caste4").disabled   = false;
     document.getElementById("fname").disabled   = false;
     document.getElementById("foccup").disabled  = false;
     document.getElementById("mname").disabled   = false;
     document.getElementById("moccup").disabled  = false;
     document.getElementById("d1").disabled = false;
     document.getElementById("d2").disabled = false;
     document.getElementById("d3").disabled = false;
     document.getElementById("d4").disabled = false;
     document.getElementById("address").disabled  = false;
     document.getElementById("number").disabled   = false;
     document.getElementById("degree1").disabled  = false;
     document.getElementById("degree2").disabled  = false;
     document.getElementById("degree3").disabled  = false;
     document.getElementById("degree4").disabled  = false;
     document.getElementById("degree5").disabled  = false;
     document.getElementById("c1").disabled = false;
     document.getElementById("c2").disabled = false;
     document.getElementById("c3").disabled = false;
     document.getElementById("c4").disabled = false;
     document.getElementById("submit").disabled = false;

     
 }