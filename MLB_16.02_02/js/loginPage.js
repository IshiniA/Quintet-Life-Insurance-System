//Login Page JS
function viewPassword(){
    var vpsw = document.getElementById("psw");
  
    if (vpsw.type === "password") {
        vpsw.type = "text";
    } 
}

function hidePassword(){
    var hpsw = document.getElementById("psw");

    if (hpsw.type === "text") {
        hpsw.type = "password";
    }
}