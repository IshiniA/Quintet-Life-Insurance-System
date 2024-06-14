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

function confirmUpdate() {
    var confirmed = confirm('Are you sure you want to update your profile?');
    if (!confirmed) {
      return false;
    }
}


function confirmDelete() {
    var confirmed = confirm('Are you sure you want to delete your profile?');
    if (!confirmed) {
      return false;
    }
}
  