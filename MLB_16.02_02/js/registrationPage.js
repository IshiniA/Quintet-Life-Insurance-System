//Registration Form JS
function viewPassword() {
    var vpsw = document.getElementsByClassName("pw");
  
    for (var i = 0; i < vpsw.length; i++) {
      vpsw[i].type = "text";
    }
  }
  
  function hidePassword() {
    var hpsw = document.getElementsByClassName("pw");
  
    for (var i = 0; i < hpsw.length; i++) {
      hpsw[i].type = "password";
    }
  }

function checkPassword()
{
    var pw = document.getElementById("psw").value;
    var cpw = document.getElementById("cpsw").value;

    if(pw == cpw){
        allert("Success!");
    }
    
    else if(pw != cpw){
        allert("Password Mismatch!!");
    }
}

function checkDoB()
{
    let dob = document.getElementById("DOB").value;
    const d = new Date(dob);
    const thisYear = new Date();

    let ageToThisYear = thisYear.getFullYear() - d.getFullYear();
    
    if(ageToThisYear < 18){
        alert("You must be at least 18 years old to register.");
        subbtn.disabled = true;
    }
}

function enableButton()
{
    var accept = document.getElementById("accept");
    var subbtn = document.getElementById("subbtn");

    if(accept.checked == true){
        subbtn.disabled = false;
    }

    else{
        subbtn.disabled = true;
    }

}

function enableButton()
{
    var accept = document.getElementById("accept");
    var subbtn = document.getElementById("subbtn");

    if(accept.checked == true){
        subbtn.disabled = false;
    }

    else{
        subbtn.disabled = true;
    }

}