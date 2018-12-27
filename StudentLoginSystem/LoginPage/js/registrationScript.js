
function  myFun(){

  var a = document.getElementById("username").value;
  var b = document.getElementById("branch").value;
  var c = document.getElementById("email").value;
  // var d = document.getElementById("enrol").value;
  var e = document.getElementById("password").value;
  var f = document.getElementById("confirmpassword").value;
  var g = document.getElementById("male").value;
  var h = document.getElementById("female").value;

  if (a=="") {
    documedocument.getElementById("username").required;
    return false;
  }

  if (b=="") {
    documedocument.getElementById("branch").required;
    return false;
  }

  if (c=="") {
    documedocument.getElementById("email").required;
    return false;
  }

  // if (d=="") {
  //   documedocument.getElementById("enrol").required;
  //   return false;
  // }

  if(e==""){

    documedocument.getElementById("password").required;
    return false;

  }

  if(e.length < 5){
    alert("password length must be equal or greater than 5 ");
    return false;
  }

  if(e!=f){
    alert("Password do not match");
    return false;
  }

  if (g=="") {
    documedocument.getElementById("male").required;
    return false;
  }

  if (h=="") {
    documedocument.getElementById("female").required;
    return false;
  }


}
