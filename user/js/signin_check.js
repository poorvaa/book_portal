function validateform(){
    var x=document.login.username.value;
    var pass=document.login.password.value;
    if (x==null || x=="") {
         alert("Username must be filled out");
       return false;
   }
    
}
////function validateForm() {
//    var x = document.forms["login"]["Username"].value;
//    var password = document.forms["login"]["password"].value;
//    if (x==null || x=="") {
//        alert("Username must be filled out");
//        return false;
//    }else if(password.length<6){  
//  alert("Password must be at least 6 characters long.");  
//  return false;  
//  }  
//}