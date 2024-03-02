
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
    var qualiff=document.form1.d1;
    var qualiff=document.form1.d2;
    var qualiff=document.form1.d3;
    var qualiff=document.form1.d4;
    var addressf=document.form1.address;
    var numf=document.form1.number;
    var degreef=document.form1.degree;
    var degreef2=document.getElementById("degree");
    var langf=document.form1.c1;
    var langf=document.form1.c1;
    var langf=document.form1.c1;
    var langf=document.form1.c1;        
 
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
             alert("Mobile number is required");    
             degreef2.focus();    
             return false;    
         }
         var uniqueidf = document.getElementById("unique_id");
         var uid = new Date().getTime().toString(36);
         uniqueidf.value = uid;

         return true; // Form will submit if all validations pass
     }